<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Sistema - Login</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/sbadmin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="vendor/sbadmin/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Bem vindo de volta!</h1>
                                    </div>
                                    <?php
                                        if (isset($_GET['msg'])) {
                                            if ($_GET['msg'] === 'error') {
                                                echo '<div class="alert alert-danger  text-center" role="alert">
                                                    <i class="fas fa-times-circle"></i> Erro ao fazer o login, Verifiquei se suas credenciais estão corretas.
                                                    </div>';
                                            } else {
                                                echo '<div class="alert alert-warning  text-center" role="alert">
                                                        <i class="fas fa-exclamation-triangle"></i> Não foi possivel fazer login, precisa inserir suas credenciais.
                                                    </div>';
                                            } 
                                        } elseif  ($_GET['logout'] === 'success') {
                                            echo '<div class="alert alert-primary  text-center" role="alert">
                                                    <i class="fas fa-exclamation-triangle"></i> Logout realizado com sucesso. Faça seu Login abaixo.
                                                </div>';
                                        }
                                    ?>
                                    <form class="user" action="auth/login.php" method="POST">
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user"
                                                id="exampleInputEmail" name="email" aria-describedby="emailHelp"
                                                placeholder="Digite o nome de usuário">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user"
                                                id="exampleInputPassword" name="password" placeholder="Senha">
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox small">
                                                <input type="checkbox" class="custom-control-input" id="customCheck">
                                                <label class="custom-control-label" for="customCheck">Lembrar Senha</label>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary btn-user btn-block">Login</button>
                                    </form>
                                    <hr>
                                    <div class="text-center">
                                        <a class="small" href="#">Esqueceu a Senha?</a>
                                    </div>
                                    <div class="text-center">
                                        <a class="small" href="#">Crie uma Conta</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/sbadmin/vendor/jquery/jquery.min.js"></script>
    <script src="vendor/sbadmin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/sbadmin/vendor/jqucd ery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="vendor/sbadmin/vendor/js/sb-admin-2.min.js"></script>

</body>

</html>