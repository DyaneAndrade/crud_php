    <?php
    error_reporting(E_ALL ^ E_NOTICE);
    $paginaLink = basename($_SERVER['SCRIPT_NAME']);
    require_once("banco-usuario.php");
    require_once("logica-usuario.php");
    require_once("mostra-alerta.php");

    $nome = buscaUsuarioNome($conexao);

    ?>

    <!DOCTYPE html>
    <html lang="pt">
    <head>
        <meta charset="utf-8">
        <title>Loja</title>
        <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="css/loja.css">
    </head>
    <body>
        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container-fluid">

                <!-- inicio-mobile -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php">Loja</a>
                </div>

                <!--fim-mobile -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li><a href="index.php" <?php if($paginaLink=='index.php'){echo'class="ativo"';} ?>>Home <span class="sr-only">(current)</span></a></li>
                        <li><a href="produto-lista.php" <?php if($paginaLink=='produto-lista.php'){echo'class="ativo"';} ?>>Lista Produtos</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Produtos <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="produto-formulario.php">Adicionar</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Categorias<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Adicionar</a></li>
                            </ul>
                        </li>
                        <li><a href="contato.php" <?php if($paginaLink=='contato.php'){echo'class="ativo"';} ?>>Fale Conosco</a></li>
                    </ul>
                    <?php if(usuarioEstaLogado()) {?>
                        <ul class="nav navbar-nav navbar-right">
                            <div class="btn-group">
                                <li class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                                </li>
                                <ul class="dropdown-menu">
                                    <li><a><?=$nome['nome']?></a></li>
                                    <li><a href="logout.php">Sair</a></li>
                                </ul>
                            </div>
                        </ul>
                    <?php }?>
                    <form class="navbar-form navbar-right buscar">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Search">
                        </div>
                        <button type="submit" class="btn btn-primary">Buscar</button>
                    </form>

                </div>
            </div>
        </nav>
        <div class="container">
            <div class="principal">

                <?php
            mostraAlerta("success");
            mostraAlerta("danger");
            ?>

