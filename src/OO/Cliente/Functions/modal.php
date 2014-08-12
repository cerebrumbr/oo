<?php
    function modal($title, $body) {
        $html = '<div class="modal fade" id="modalCliente" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                    <h4 class="modal-title" id="myModalLabel">'.$title.'</h4>
                    </div>
                    <div class="modal-body">
                    '.$body.'
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                </div>
            </div>
          </div>
        </div>';

        return $html;
    }

    function modalClientes($obj, $id) {
        $k = (int) $id - 1;
        $cliente = $obj[$k];

        if(isset($cliente)){
            $pessoaJuridica = $cliente->ePessoaJuridica();
            $nome = ($pessoaJuridica ? $cliente->getNomeFantasia() : $cliente->getNome());
            $tipoPessoa = ($pessoaJuridica ? 'Pessoa Jurídica' : 'Pessoa Física');
            $grauImportancia = $cliente->getGrauImportancia();
            $enderecos = $cliente->getEnderecos();
            $telefones = $cliente->getTelefones();

            $dados = [
                'Tipo Pessoa' => $tipoPessoa,
                ($pessoaJuridica ? 'Razão Social' : 'Nome') => $nome,
                ($pessoaJuridica ? 'CNPJ' : 'CPF') => $pessoaJuridica ? $cliente->getCnpj() : $cliente->getCpf(),
                'Grau de importancia' => $grauImportancia . ' ' . ($grauImportancia > 1 ? 'estrelas' : 'estrela') . ' | ' . str_repeat('<i class="fa fa-star"></i>', $grauImportancia)
            ];

            $modalBody = function() use ($dados) {
              $html = "";
              foreach($dados as $k => $v) {
                 $html .= "<b>{$k}</b>: {$v}<br />";
              }

              return $html;
            };

            $html = $modalBody() . "<hr> <b>Telefones:</b><br /><br />";

            foreach($telefones as $telefone) {
                $ddd = $telefone->getDdd();
                $tel = $telefone->getTelefone();

                $html .= "({$ddd}) {$tel}<br />";
            }

            $html .= "<hr> <b>Endereços:</b><br /><br />";

            foreach($enderecos as $endereco) {
                $enderecoCobranca = $endereco->EEnderecoCobranca();

                if($enderecoCobranca) {
                    $html .= "<div class=\"alert alert-success\" role=\"alert\">Endereço de Cobrança:</div>";
                }

                $html .= "
                    <b>Logradouro:</b> {$endereco->getLogradouro()} - {$endereco->getNumero()}<br />
                    <b>Bairro:</b> {$endereco->getBairro()}<br />
                    <b>CEP:</b> {$endereco->getCEP()}<br />
                    <b>Cidade:</b> {$endereco->getCidade()} / {$endereco->getEstado()}
                ";

                $html .= "<hr>";
            }

            $modalTitle = "Cliente #{$id} {$nome}";

            $html = modal($modalTitle, $html);

        } else {
            $html = modal("Cliente não encontrado!", "O cliente <b>#{$id}</b> não foi encontrado no sistema!<br />
            Por favor, cheque o ID e tente novamente!");
        }

        return $html;
    }