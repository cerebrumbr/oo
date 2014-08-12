<?php
    $order = (isset($_GET['order']) && !empty($_GET['order']) ? $_GET['order'] : 'asc');

    require_once "class/Cliente.class.php";
    require_once "autoload.php";
    require_once "functions/modal.php";
    require_once "functions/clientes.php";

    $cliente = new PessoaFisica("Walter Araújo Gomes Júnior", "78849372639", "Rua Inglaterra 237", "Itapira / SP");
    $cliente->setTelefone("1938436776")
        ->setEnderecoCobranca('Avenida Siqueira Campos 26 - Itapira / SP')
        ->setGrauImportancia(5);

    $clientes[] = $cliente;

    $cliente = new PessoaJuridica('Melissa Vidros', 'Melissa e Igor Vidros ME', '51490223000115', 'Rua Antonio Costa Dias 959', 'Campinas / SP');
    $cliente->setTelefone("1921404973")
        ->setGrauImportancia(2);

    $clientes[] = $cliente;

    $cliente = new PessoaJuridica('Padaria FE', 'Felipe e Emily Padaria Ltda', '16542523000108', 'Travessa Francisco Barreto Leme 845', 'Taubaté / SP');
    $cliente->setTelefone("1912345678")
        ->setGrauImportancia(5);

    $clientes[] = $cliente;

    $cliente = new PessoaFisica("Cadu Pelegrini", "34326334000171", "Rua Frei Caneca 1802", "São Paulo / SP");
    $cliente->setTelefone("11123456789")
        ->setGrauImportancia(5);

    $cliente = new PessoaFisica("Danilo Dias Barros", "34326334000171", "Rua Bonfim, 680", "Cariacica / ES");
    $cliente->setTelefone("2812345678")
        ->setGrauImportancia(1);

    $clientes[] = $cliente;

    $cliente = new PessoaFisica("Luiz Eduardo Morelli", "34326334000171", "Avenida Presidente Wilson, 10", "Santos / SP");
    $cliente->setTelefone("35716850596")
        ->setGrauImportancia(4);

    $clientes[] = $cliente;

    $cliente = new PessoaFisica('André Toledo', '00000000000', 'Rua Frei Caneca 82', 'São Paulo / SP');
    $cliente->setTelefone('1112345678')
            ->setGrauImportancia(2);

    $clientes[] = $cliente;

    $cliente = new PessoaJuridica('JS Advocacia', 'Jennifer e Sabrina Advogados ME', '64872005000197', 'Rua Doze de Outubro, 529', 'Lorena / SP');
    $cliente->setTelefone("1945284512")
        ->setGrauImportancia(1);

    $clientes[] = $cliente;

    $cliente = new PessoaJuridica('DJ Telecom', 'Davi e Julio Telecomunicações Ltda', '42345010000109', 'Rua José Ungaretti, 293', 'Valinhos / SP');
    $cliente->setTelefone("1939124522")
        ->setGrauImportancia(5);

    $clientes[] = $cliente;

    $cliente = new PessoaFisica('Carlos Henrique', '04598720122', 'Rua Suíça, 52', 'Rio Claro / SP');
    $cliente->setTelefone('1112345678')
        ->setGrauImportancia(5);

    $clientes[] = $cliente;

    $cliente = new PessoaFisica('Carlos Henrique Júnior', '04598720122', 'Rua Marechal Teodoro, 182', 'Rio Claro / SP');
    $cliente->setTelefone('1112345678')
        ->setEnderecoCobranca('Rua Suíça, 52 - Rio Claro / SP')
        ->setGrauImportancia(1);

    $clientes[] = $cliente;

    if($order == 'desc') {
        $order = 'asc';
        krsort($clientes);
    } else {
        $order = 'desc';
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>OO - Code.Education</title>

    <link href="public_html/css/bootstrap.min.css" rel="stylesheet">
    <link href="public_html/css/plugins/metisMenu/metisMenu.min.css" rel="stylesheet">
    <link href="public_html/css/sb-admin-2.css" rel="stylesheet">
    <link href="public_html/font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
</head>

<body>

<div id="wrapper">

<?php
    include("layout/navbar.php");
?>

<div id="page-wrapper">
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Clientes</h1>
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->
<div class="row">
<div class="col-lg-12">
<div class="panel panel-default">
<div class="panel-heading">
    Listagem de clientes (clique sob o cliente desejado para exibir todos os dados detalhadamente)
</div>
<!-- /.panel-heading -->
<div class="panel-body">
<div class="table-responsive">
<table class="table table-striped table-bordered table-hover" id="tabelaClientes">
<thead>
<tr url="index.php?order=<?php echo $order; ?>">
    <th># <i class="fa fa-sort"></i></th>
    <th>Nome</th>
    <th>Tipo pessoa</th>
</tr>
</thead>
<tbody>
<?php array_walk($clientes, $exibirClientes); ?>
</tbody>
</table>
</div>
<!-- /.table-responsive -->
</div>
<!-- /.panel-body -->
</div>
<!-- /.panel -->
</div>
<!-- /.col-lg-12 -->
</div>

<!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->

<?php
if(isset($_GET['acao'])) {
    switch($_GET['acao']) {
        case 'mostrar':
            $id = (int) ($_GET['id'] - 1);
            echo modalClientes($clientes, $id);
            break;
    }
}
?>

<script src="public_html/js/jquery-1.11.0.js"></script>
<script src="public_html/js/bootstrap.min.js"></script>
<script src="public_html/js/plugins/metisMenu/metisMenu.min.js"></script>
<script src="public_html/js/sb-admin-2.js"></script>

<script>
    $(document).ready(function(){
        if($("#modalCliente").length > 0) {
            $("#modalCliente").modal();
        }

        $("tr").css("cursor", "pointer");

        $("tr").click(function(){
            window.location = $(this).attr("url");

        });
    });
</script>

</body>
</html>
