<?php
    require_once("class/Cliente.class.php");

    $exibirClientes = function($cliente, $key) {
        $id = $key + 1;
        $nome = $cliente->nome;
        $cpf = $cliente->cpf;
        $endereco = $cliente->endereco;
        $cidade = $cliente->cidade;
        $telefone = $cliente->telefone;

        $html = "<tr class=\"odd gradeX\">
                <td>{$id}</td>
                <td>{$nome}</td>
                <td>{$cpf}</td>
                <td class=\"center\">{$endereco}</td>
                <td class=\"center\">{$cidade}</td>
                <td class=\"center\">{$telefone}</td>
            </tr>";

        echo $html;
    };

    $clientes = [
        new Cliente('Walter Araújo Gomes Júnior', '00000000000', 'Rua Inglaterra 237', 'Itapira / SP', '1912345678'),
        new Cliente('Thiago Oliveira', '00000000000', 'Avenida Paulista 1482', 'São Paulo / SP', '11123456789'),
        new Cliente('Márcio Vasconcelos', '00000000000', 'Rua Oscar Freire 2082', 'São Paulo / SP', '1112345678'),
        new Cliente('João Gomes', '00000000000', 'Avenida Brasil 52', 'Itapira / SP', '1112345678')
    ];
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
    <![endif]-->

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
    Listagem de clientes
</div>
<!-- /.panel-heading -->
<div class="panel-body">
<div class="table-responsive">
<table class="table table-striped table-bordered table-hover" id="tabelaClientes">
<thead>
<tr>
    <th>#</th>
    <th>Nome</th>
    <th>CPF</th>
    <th>Endereço</th>
    <th>Cidade</th>
    <th>Telefone</th>
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

<!-- jQuery Version 1.11.0 -->
<script src="js/jquery-1.11.0.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="js/plugins/metisMenu/metisMenu.min.js"></script>

<!-- DataTables JavaScript -->
<script src="js/plugins/dataTables/jquery.dataTables.js"></script>
<script src="js/plugins/dataTables/dataTables.bootstrap.js"></script>

<!-- Custom Theme JavaScript -->
<script src="js/sb-admin-2.js"></script>

<script>
    $(document).ready(function() {
        $('#tabelaClientes').dataTable({
            "oLanguage": {
                "sProcessing": "Aguarde enquanto os dados são carregados ...",
                "sLengthMenu": "Mostrar _MENU_ registros por pagina",
                "sZeroRecords": "Nenhum registro correspondente ao criterio encontrado",
                "sInfoEmtpy": "Exibindo 0 a 0 de 0 registros",
                "sInfo": "Exibindo de _START_ a _END_ de _TOTAL_ registros",
                "sInfoFiltered": "",
                "sSearch": "Procurar",
                "oPaginate": {
                    "sFirst":    "Primeiro",
                    "sPrevious": "Anterior",
                    "sNext":     "Próximo",
                    "sLast":     "Último"
                }
            }
        });
    } );
</script>
</body>

</html>
