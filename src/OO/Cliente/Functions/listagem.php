<?php
    $exibirClientes = function($cliente, $key) use($order) {
        $id = $cliente->getId();
        $tipoPessoa = $cliente->ePessoaJuridica();
        $nome = ($tipoPessoa ? $cliente->getNomeFantasia() : $cliente->getNome());
        $tipoPessoa = ($tipoPessoa ? 'Pessoa Jurídica' : 'Pessoa Física');

        $html = "<tr class=\"odd gradeX\" url=\"" . BASE_URL . "?acao=mostrar&id={$id}&order={$order}\">
                        <td>{$id}</td>
                        <td>{$nome}</td>
                        <td>{$tipoPessoa}</td>
                    </tr>";

        echo $html;
    };