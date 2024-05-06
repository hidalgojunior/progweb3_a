<?php require_once 'conexao.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestão Básica de Usuários - Etec Antonio Devisate</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="meuestilo.css">
</head>

<body>
    <div class="container">
        <header>
            <div class="row">
                <nav class="navbar navbar-expand-lg bg-branco">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="index.php">GBU</a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                <li class="nav-item">
                                    <a class="nav-link " aria-current="page" href="#">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">DashBoard</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                        Usuarios
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Cadastrar</a></li>
                                        <li><a class="dropdown-item" href="#">Listar</a></li>
                                        <li>
                                            <hr class="dropdown-divider">
                                        </li>
                                        <li><a class="dropdown-item" href="#">Excluir</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link ">Logout</a>
                                </li>
                            </ul>
                            <!--
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
-->
                        </div>
                    </div>
                </nav>
            </div>
        </header>
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12">
                <h1 class="display-4">Cadastro de Usuários</h1>
            </div>
        </div>
        <form method="post" class="form-control">
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-2">
              <label for="nome">Nome Completo</label>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-10">
              <input type="text" name="nome" id="nome" class="form-control">
            </div>
        </div>
        <div class="row">
        <div class="col-sm-12 col-md-6 col-lg-2">
          <label for="login">Login</label>
        </div>
            <div class="col-sm-12 col-md-6 col-lg-4">
              <input type="text" name="login" id="login" class="form-control">
            </div>
            <div class="col-sm-12 col-md-6 col-lg-2">
              <label for="nivel">Nivel</label>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-4">
              <select name="nivel" id="nivel" class="form-control">
                <option disabled selected>Clique e escolha uma opção abaixo</option>
                <option value="0">Administrador</option>
                <option value="1">Secretaria</option>
                <option value="2">Consultas</option>
              </select>

            </div>
        </div>
        <div class="row">
        <div class="col-sm-12 col-md-6 col-lg-2">
              <label for="senha1">Digite a senha</label>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-4">
              <input type="password" name="senha1" id="senha1" class="form-control">
            </div>
            <div class="col-sm-12 col-md-6 col-lg-2">
              <label for="senha2">Redigite a senha</label>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-4">
              <input type="password" name="senha2" id="senha2" class="form-control">
            </div>
        </div>
        </form>


    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
    </script>
</body>

</html>