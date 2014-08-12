<?php

    use \OO\Cliente\Types\PessoaFisicaType as PF;
    use \OO\Cliente\Types\PessoaJuridicaType as PJ;
    use \OO\Endereco\Endereco;
    use \OO\Telefone\Telefone as Tel;

    $order = (!isset($_GET['order']) || empty($_GET['order']) ? 'asc' : $_GET['order']);

    require "Cliente/Functions/listagem.php";
    require "Cliente/Functions/modal.php";

    $clientes = [];

    $cliente = new PF('Walter Araújo Gomes Júnior', '088.930.018-61');
    $endereco = new Endereco('Rua Inglaterra', 237, 'Jardim Raquel', true);
    $endereco->setCidade('Itapira')->setEstado('SP')->setCep('13.972-506');
    $tel = new Tel('19', '3843-6776');
    $cel = new Tel('19', '99972-0319');
    $cliente->addEndereco($endereco)->addTelefone($tel)->addTelefone($cel);
    $cliente->setGrauImportancia(5);

    array_push($clientes, $cliente);

    $empresa = new PJ('Calebe Pizzas', 'Calebe e Isadora Pizzaria Delivery Ltda', '75.475.160/0001-96');
    $endereco = new Endereco('Rua Áureo Moreira', '325', 'Jardim Conceiçãozinha (Vicente de Carvalho)');
    $endereco->setCidade('Guarujá')->setEstado('SP')->setCep('13807-020');
    $empresa->addTelefone(new Tel('11', '4259-7812'))->addEndereco($endereco);

    array_push($clientes, $empresa);

    $empresa = new PJ('Padaria FE', 'Felipe e Emily Padaria Ltda', '12.800.120/0001-20');
    $endereco = new Endereco('Rua Áureo Moreira', '325', 'Jardim Conceiçãozinha (Vicente de Carvalho)');
    $endereco->setCidade('Guarujá')->setEstado('SP')->setCep('13807-020');
    $empresa->addTelefone(new Tel('11', '4527-2212'))->addEndereco($endereco);
    $empresa->setGrauImportancia(4);

    array_push($clientes, $empresa);

    $cliente = new PF('Danilo Dias Barros', '421.122.241-12');
    $endereco = new Endereco('Rua Bonfim', 680, 'Jardim Bela Vista', true);
    $endereco->setCidade('Piracicaba')->setEstado('SP')->setCep('12.512-412');
    $tel = new Tel('19', '3912-4652');;
    $cliente->addEndereco($endereco)->addTelefone($tel);
    $cliente->setGrauImportancia(2);

    array_push($clientes, $cliente);

    $cliente = new PF('Jorge Luiz', '284.475.271-22');
    $endereco = new Endereco('Rua Francisco Ferreira', 20, 'Centro', true);
    $endereco->setCidade('Mogi Mirim')->setEstado('SP')->setCep('12.512-412');
    $tel = new Tel('19', '3941-8252');;
    $cliente->addEndereco($endereco)->addTelefone($tel);
    $cliente->setGrauImportancia(2);

    array_push($clientes, $cliente);

if($order == 'desc') {
        rsort($clientes);
    }

    $order = ($order == 'asc' ? 'desc' : 'asc');