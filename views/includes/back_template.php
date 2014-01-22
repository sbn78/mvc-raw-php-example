<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Administração Biblioteca</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="./css/bootstrap.css" rel="stylesheet">
    <style type="text/css">
      body {
        padding-top: 20px;
        padding-bottom: 40px;
      }

      /* Custom container */
      .container-narrow {
        margin: 0 auto;
        max-width: 700px;
      }
      .container-narrow > hr {
        margin: 30px 0;
      }

      /* Main marketing message and sign up button */
      .jumbotron {
        margin: 60px 0;
        text-align: center;
      }
      .jumbotron h1 {
        font-size: 72px;
        line-height: 1;
      }
      .jumbotron .btn {
        font-size: 21px;
        padding: 14px 24px;
      }

      /* Supporting marketing content */
      .marketing {
        margin: 60px 0;
      }
      .marketing p + h4 {
        margin-top: 28px;
      }
    </style>
    <link href="./css/bootstrap-responsive.css" rel="stylesheet">
  </head>

  <body style="">

    <div class="container-narrow">

      <div class="masthead">
        <ul class="nav nav-pills pull-right">
          <li <?php if($menu == 'livros'){ ?> class="active" <?php } ?>><a href="admin.php?do=livros">Livros</a></li>
          <li <?php if($menu == 'utilizadores'){ ?> class="active" <?php } ?>><a href="admin.php?do=utilizadores">Utilizadores</a></li>

          <?php
            if(isset($_SESSION['ID_Utilizador'])){
              echo "<li><a href='#'>Olá, ".$_SESSION['nome']."</a></li>";
            } 
          ?> 
          <li><a href='login.php?do=logout'>Terminar Sessão</a></li>

        </ul>
        <h3 class="muted">Administração</h3>
      </div>
     
      <hr>

      <?php include($vista); ?>

      <hr>

      <div class="footer">
        <p>© Biblioteca 2013</p>
      </div>

    </div> <!-- /container -->

  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>    
  <script src="./js/bootstrap.js"></script>


  </body>
</html>