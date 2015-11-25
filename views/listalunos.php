<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="Escola de arte">
    <meta name="author" content="Feliphe Simões Carvalho , Caio Fernando Dalla Vechia">
    <link rel="icon" href="<?php echo base_url();?>Static/img/icone4.ico">

    <title>Studio Dalla Vechia</title>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Condensed' rel='stylesheet' type='text/css'>

    <link href='https://fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css'>
    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url();?>Static/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url();?>Static/css/cover.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="<?php echo base_url();?>Static/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="site-wrapper">

      <div class="site-wrapper-inner">

        <div class="cover-container">

                        <div class="masthead clearfix">

                          <div class="inner">

                            <h3 class="masthead-brand">
                              <a href="<?php echo base_url(); ?>index.php/controller/home" class="logo">Studio Dalla Vechia</a>  
                            </h3>
                            
                            <nav>
                              <ul class="nav masthead-nav">
                                <li><a href="<?php echo base_url(); ?>index.php/controller/cursos">Cursos</a></li>
                                <li><a href="<?php echo base_url(); ?>index.php/controller/escola">Escola</a></li>
                                <li><a href="<?php echo base_url(); ?>index.php/controller/noticias">Noticias</a></li>
                                <li><a href="<?php echo base_url(); ?>index.php/controller/cadastro">Cadastre-se</a></li>
                                <li><a href="<?php echo base_url(); ?>index.php/controller/login"><span class="glyphicon glyphicon-user"></span> Login</a></li>
                              </ul>
                            </nav>

                          </div>

                        </div>

                        <div class="inner cover">
                          
                 
                                   <?php 
                                        
                                                
                                            foreach($lista as $u){
                                                echo "<p>"."<strong>Nome:</strong> ".$u->nm_aluno." <br> <strong>Sobrenome:</strong> ".$u->nm_sobrenome."<br>   <strong>Curso:</strong> ".$u->ds_curso."</p><br>";
                                            }
                                     ?>
                                
                                <a class="btn btn-primary" href="https://trabalho-feliphe8.c9.io/index.php/controller/sucesso">Voltar</a>
                                                            
                        </div>

                        <div class="mastfoot">
                          <div class="inner">
                           <address>
                                <strong>Studio Dalla Vechia</strong><br /> Rua Dr. Oswaldo Cruz, 106 sala 3<br /> Boqueirão - Santos-SP<br /> <abbr title="Phone">Telefone:</abbr> (13) 3301-3544
                            </address>
                            <p>©2015 Todos direitos reservados, by KoalaCF.</p>
                          </div>
                        </div>

         </div>

       </div>

    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="<?php echo base_url();?>Static/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="<?php echo base_url();?>Static/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
