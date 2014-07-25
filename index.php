<?php
    require_once("class/Cliente.class.php");
    require_once("functions/modal.php");

    $order = (isset($_GET['order']) ? $_GET['order'] : 'asc');

    $exibirClientes = function($cliente, $key) use($order) {
        $id = $key + 1;
        $nome = $cliente->nome;
        $cpf = $cliente->cpf;
        $endereco = $cliente->endereco;
        $cidade = $cliente->cidade;
        $telefone = $cliente->telefone;

        $html = "<tr class=\"odd gradeX\" url=\"index.php?acao=mostrar&id={$id}&order={$order}\">
                <td>{$id}</td>
                <td>{$nome}</td>
            </tr>";

        echo $html;
    };

    $clientes = [
        new Cliente('Walter Araújo Gomes Júnior', '00000000000', 'Rua Inglaterra 237', 'Itapira / SP', '1912345678'),
        new Cliente('Thiago Oliveira', '00000000000', 'Avenida Paulista 1482', 'São Paulo / SP', '11123456789'),
        new Cliente('Márcio Vasconcelos', '00000000000', 'Rua Oscar Freire 2082', 'São Paulo / SP', '1112345678'),
        new Cliente('João Gomes', '00000000000', 'Avenida Brasil 52', 'Itapira / SP', '1112345678'),
        new Cliente('Thiago Jessé', '00000000000', 'Rua Oscar Neto 92', 'Itapira / SP', '1112345678'),
        new Cliente('Adriana Ribeiro', '00000000000', 'Rua Padre Roque 222', 'Poços de Caldas / MG', '1112345678'),
        new Cliente('Cadu Pelegrini', '00000000000', 'Rua Frei Caneca 52', 'São Paulo / SP', '1112345678'),
        new Cliente('André Toledo', '00000000000', 'Rua Frei Caneca 82', 'São Paulo / SP', '1112345678'),
        new Cliente('Luiz Eduardo Morelli', '00000000000', 'Avenida Presidente Wilson 10', 'Santos / SP', '1112345678'),
        new Cliente('Leonardo Parentoni', '00000000000', 'Avenida Siqueira Campos 52', 'Itapira / SP', '1112345678')
    ];

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

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="css/plugins/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- DataTables CSS -->
    <link href="css/plugins/dataTables.bootstrap.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
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

<!-- jQuery Version 1.11.0 -->
<script src="js/jquery-1.11.0.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="js/plugins/metisMenu/metisMenu.min.js"></script>

<!-- DataTables JavaScript -->
<script src="js/plugins/dataTables/dataTables.bootstrap.js"></script>

<!-- Custom Theme JavaScript -->
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
