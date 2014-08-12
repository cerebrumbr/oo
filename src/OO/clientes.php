<?php

    use \OO\Cliente\Types\PessoaFisicaType as PF;
    use \OO\Cliente\Types\PessoaJuridicaType as PJ;
    use \OO\Endereco\Endereco;
    use \OO\Telefone\Telefone as Tel;

    $clientes = [];

    $cliente = new PF('Juninho', '088.930.018-61');
    $endereco = new Endereco('Rua Inglaterra', 237, 'Jardim Raquel', true);
    $endereco->setCidade('Itapira')->setEstado('SP')->setCep('13.972-506');
    $tel = new Tel('19', '3843-6776');
    $cliente->addEndereco($endereco)->addTelefone($tel);
    $cliente->setGrauImportancia(5);

    array_push($clientes, $cliente);

    $cliente = new PF('Juninho', '088.930.018-61');
    $endereco = new Endereco('Rua Inglaterra', 237, 'Jardim Raquel', true);
    $endereco->setCidade('Itapira')->setEstado('SP')->setCep('13.972-506');
    $tel = new Tel('19', '3843-6776');
    $cliente->addEndereco($endereco)->addTelefone($tel);
    $cliente->setGrauImportancia(5);

    array_push($clientes, $cliente);

    $cliente = new PF('Juninho', '088.930.018-61');
    $endereco = new Endereco('Rua Inglaterra', 237, 'Jardim Raquel', true);
    $endereco->setCidade('Itapira')->setEstado('SP')->setCep('13.972-506');
    $tel = new Tel('19', '3843-6776');
    $cliente->addEndereco($endereco)->addTelefone($tel);
    $cliente->setGrauImportancia(5);

    array_push($clientes, $cliente);

    $cliente = new PF('Juninho', '088.930.018-61');
    $endereco = new Endereco('Rua Inglaterra', 237, 'Jardim Raquel', true);
    $endereco->setCidade('Itapira')->setEstado('SP')->setCep('13.972-506');
    $tel = new Tel('19', '3843-6776');
    $cliente->addEndereco($endereco)->addTelefone($tel);
    $cliente->setGrauImportancia(5);

    array_push($clientes, $cliente);

    $cliente = new PJ('Juninho', 'Teste', '088.930.018-61');
    $endereco = new Endereco('Rua Inglaterra', 237, 'Jardim Raquel', true);
    $endereco->setCidade('Itapira')->setEstado('SP')->setCep('13.972-506');
    $tel = new Tel('19', '3843-6776');
    $cliente->addEndereco($endereco)->addTelefone($tel);
    $cliente->setGrauImportancia(5);

    array_push($clientes, $cliente);

    $cliente = new PJ('Juninho', 'Teste', '088.930.018-61');
    $endereco = new Endereco('Rua Inglaterra', 237, 'Jardim Raquel', true);
    $endereco->setCidade('Itapira')->setEstado('SP')->setCep('13.972-506');
    $tel = new Tel('19', '3843-6776');
    $cliente->addEndereco($endereco)->addTelefone($tel);
    $cliente->setGrauImportancia(5);

    array_push($clientes, $cliente);

    $cliente = new PJ('Juninho', 'Teste', '088.930.018-61');
    $endereco = new Endereco('Rua Inglaterra', 237, 'Jardim Raquel', true);
    $endereco->setCidade('Itapira')->setEstado('SP')->setCep('13.972-506');
    $tel = new Tel('19', '3843-6776');
    $cliente->addEndereco($endereco)->addTelefone($tel);
    $cliente->setGrauImportancia(5);

    array_push($clientes, $cliente);