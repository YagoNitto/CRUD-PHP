<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadastro</title>
    <link href="css/bootstrap.css" rel="stylesheet">
  </head>
  <body>
    <header>
        <nav class="navbar navbar-expand-lg bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" style="color: white;" href="index.php">YagoNitto</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                    <a class="nav-link active" style="color: white;" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" style="color: white;" href="?page=novo">Cadastrar usuário</a>
                    </li>
                    <li class="nav-item dropdown">
                    <a class="nav-link" style="color: white;" href="?page=listar">Listar Usuários</a>
                    </li>
                </ul>
                </div>
            </div>
        </nav>

        <div class="container">
            <div class="row">
                <div class="col mt-5">
                    <?php
                        include("config.php");
                        switch(@$_REQUEST["page"])
                        {
                            case "novo":
                                include("novo-usuario.php");
                            break;
                            case "listar":
                                include("listar-usuarios.php");
                            break;
                            case "salvar":
                                include("salvar-usuario.php");
                            break;
                            case "editar":
                                include("editar-usuario.php");
                            break;
                            default:
                                print "<h1 class='d-flex justify-content-center'>Bem-Vindo!</h1>";
                                print "<h3 class='d-flex justify-content-center'>CRUD simples para cadastro de usuários.</h3>";
                                print "<p class='d-flex justify-content-center'>Primeiro CRUD em PHP.</p>";
                        }
                    ?>
                </div>
            </div>
        </div>
    </header>
    <footer class="border-top footer text-muted bg-dark fixed-bottom">
        <div class="container mt-2 mb-2">
            <div>
                <span style="color: white;">&copy; 2023 - YagoNitto</span>
            </div>
    </footer>
    <script src="js/bootstrap.bundle.min.js" ></script>
  </body>
</html>