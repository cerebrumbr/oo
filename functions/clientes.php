<?php
    $exibirClientes = function($cliente, $key) use($order) {
        $id = $key + 1;
        $pessoaJuridica = $cliente->ePessoaJuridica();
        if($pessoaJuridica)
        {
            $nome = $cliente->getNomeFantasia();
            $cpf = $cliente->getCnpj();
        } else {
            $nome = $cliente->getNome();
            $cpf = $cliente->getCpf();
        }


        $endereco = $cliente->getEndereco();
        $cidade = $cliente->getCidade();
        $telefone = $cliente->getTelefone();

        $tipoPessoa = ($pessoaJuridica ? 'Pessoa Jurídica' : 'Pessoa Física');

        $html = "<tr class=\"odd gradeX\" url=\"index.php?acao=mostrar&id={$id}&order={$order}\">
                    <td>{$id}</td>
                    <td>{$nome}</td>
                    <td>{$tipoPessoa}</td>
                </tr>";

        echo $html;
    };