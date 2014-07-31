<?php
    require_once "autoload.php";

    require_once "functions/modal.php";
    require_once "functions/clientes.php";

    $order = (isset($_GET['order']) ? $_GET['order'] : 'asc');

    if($order == 'desc') {
        $order = 'asc';
        krsort($clientes);
    } else {
        $order = 'desc';
    }

    $cliente = new PessoaFisica("Walter Araújo Gomes Júnior", "78849372639", "Rua Inglaterra 237", "Itapira / SP");
    $cliente->setTelefone("1938436776")
            ->setGrauImportancia(5);

    $clientes[] = $cliente;

    $cliente = new PessoaJuridica("Nome", "razão", "82784415538", "rua", "cidade");
    $cliente->setTelefone("1938436776")
        ->setGrauImportancia(5);

    $clientes[] = $cliente;
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

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/plugins/metisMenu/metisMenu.min.css" rel="stylesheet">
    <link href="css/sb-admin-2.css" rel="stylesheet">
    <link href="font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
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

<script src="js/jquery-1.11.0.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/plugins/metisMenu/metisMenu.min.js"></script>
<script src="js/sb-admin-2.js"></script>

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
