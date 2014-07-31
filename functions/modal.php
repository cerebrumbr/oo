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
        $cliente = $obj[$id];
        $id++;

        if(isset($cliente)){
            $id = $key + 1;

            $pessoaJuridica = $cliente->ePessoaJuridica();
            $endereco = $cliente->getEndereco();
            $cidade = $cliente->getCidade();
            $telefone = $cliente->getTelefone();
            $tipoPessoa = ($pessoaJuridica ? 'Pessoa Jurídica' : 'Pessoa Física');
            $grauImportancia = $cliente->getGrauImportancia();

            $dados = [
                'Tipo Pessoa' => $tipoPessoa,
                ($pessoaJuridica ? 'Razão Social' : 'Nome') => $pessoaJuridica ? $cliente->getRazaoSocial() : $cliente->getNome(),
                ($pessoaJuridica ? 'CNPJ' : 'CPF') => $pessoaJuridica ? $cliente->getCnpj() : $cliente->getCpf(),
                'Telefone' => $cliente->getTelefone(),
                'Grau de importancia' => $grauImportancia . ' ' . ($grauImportancia > 1 ? 'estrelas' : 'estrela') . ' | ' . str_repeat('<i class="fa fa-star"></i>', $grauImportancia)
            ];

            $modalBody = function() use ($dados) {
              $html = "";
              foreach($dados as $k => $v) {
                 $html .= "<b>{$k}</b>: {$v}<br />";
              }

              return $html;
            };

            $modalTitle = "Cliente #{$id} {$nome}";

            $html = modal($modalTitle, $modalBody());

        } else {
            $html = modal("Cliente não encontrado!", "O cliente <b>#{$id}</b> não foi encontrado no sistema!<br />
            Por favor, cheque o ID e tente novamente!");
        }

        return $html;
    }