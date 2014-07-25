<?php
    function modalClientes($obj, $id) {
        $cliente = $obj[$id];
        $id++;
        $nome = $cliente->nome;
        $cpf = $cliente->cpf;
        $endereco = $cliente->endereco;
        $cidade = $cliente->cidade;
        $telefone = $cliente->telefone;

        $html = '<div class="modal fade" id="modalCliente" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                    <h4 class="modal-title" id="myModalLabel">Cliente #'.$id . ' ' . $nome.'</h4>
                    </div>
                    <div class="modal-body">
                        <b>Nome:</b> '.$nome.'<br />
                        <b>CPF:</b> '.$cpf.'<br />
                        <b>Endereço:</b> '.$endereco.'<br />
                        <b>Cidade:</b> '.$cidade.'<br />
                        <b>Telefone:</b> '.$telefone.'
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                </div>
            </div>
          </div>
        </div>';

        return $html;
    }