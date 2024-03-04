<!DOCTYPE html>
<?php require_once 'permissions.php';
    checkPermission(); //essa função verifica se há permissões de acessos ao app atraves de sessões.
?> 
<html lang="pt-br">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Sistema - Painel Admin</title>

    <!-- Custom fonts for this template-->
    <link href="../vendor/sbadmin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../vendor/sbadmin/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <?php include 'templates/sidebar.php';?>

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <?php include 'templates/header.php';?>

                <!-- Begin Page Content -->
                <div class="container-fluid">
                     
                    <?php
                        /**
                         * Chama a função para carregar as paginas dinamicamente
                         */
                        include_once 'charge_pages.php';
                        // Verifica se o parâmetro 'pagina' está presente na query string
                        if(isset($_GET['pagina'])) {
                            // Obtém o nome da página a partir do parâmetro
                            $pagina = $_GET['pagina'];
                            carregarPagina($pagina);
                        } else {
                            // Caso nenhum parâmetro 'pagina' seja passado, exibe a página inicial
                            carregarPagina('pagina=home');
                        }
                    ?>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <?php include 'templates/footer.php';?>

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->    
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Bootstrap core JavaScript-->
    <script src="../vendor/sbadmin/vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/sbadmin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../vendor/sbadmin/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../vendor/sbadmin/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="../vendor/sbadmin/vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="../vendor/sbadmin/js/demo/chart-area-demo.js"></script>
    <script src="../vendor/sbadmin/js/demo/chart-pie-demo.js"></script>

</body>

</html>