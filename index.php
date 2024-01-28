<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Salão</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <style>
      body{
        background-color:rgb(180, 180, 180); 
      }
    </style>
  </head>
  <body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Bella Beauty Studio</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <ul class="navbar-nav">
        <li class="nav iten">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>

        <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Cadastro de atendente
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <li><a class="dropdown-item" href="?page=cadastrar atendente">Cadastrar</a></li>
                <li><a class="dropdown-item" href="?page=listar atendente">Listar</a></li>
              </ul>
        <li class="nav iten">
          <a class="nav-link" href="?page=novo">Agendar Horário</a>
        </li>
        <li class="nav iten">
          <a class="nav-link" href="?page=agenda">Agenda</a>
        </li>
        <li class="nav iten">
          <a class="nav-link" href="?page=listar">Listar Usuário</a>
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

          switch(@$_REQUEST["page"]){

            //atendente
              case "cadastrar atendente":
                include("cadastrar atendente.php");
                break;
              case "listar atendente":
                include("listar atendente.php");
                break;
              case "editar atendente":
                include("editar atendente.php");
                break;
              case "salvar atendente":
                include("salvar atendente.php");
                break;

            case "novo":
              include("formulario de cadastro.php");
            break;
            case "agenda":
              include("agenda.php");
            break;
            
            //usuarios
            case "listar":
              include("listar usuarios.php");
            break;
            case "salvar":
              include("salvar usuario.php");
            break;
            case "editar":
              include("editar usuario.php");
            break;
                default:
                  print "<h1>Bem vindo!</h1>";
                  
          }
        ?>
       
      </div>
    </div>
  </div>
    <script src="js/bootstrap.bundle.min.js"></script>
  </body>
</html>