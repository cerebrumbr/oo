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
        $nome = $cliente->nome;
        $cpf = $cliente->cpf;
        $endereco = $cliente->endereco;
        $cidade = $cliente->cidade;
        $telefone = $cliente->telefone;

        $modalTitle = 'Cliente #'.$id . ' ' . $nome;

        $modalBody = '<b>Nome:</b> '.$nome.'<br />
                        <b>CPF:</b> '.$cpf.'<br />
                        <b>Endereço:</b> '.$endereco.'<br />
                        <b>Cidade:</b> '.$cidade.'<br />
                        <b>Telefone:</b> '.$telefone;

        $html = modal($modalTitle, $modalBody);

        } else {
            $html = modal("Cliente não encontrado!", "O cliente <b>#{$id}</b> não foi encontrado no sistema!<br />
            Por favor, cheque o ID e tente novamente!");
        }

        return $html;
    }