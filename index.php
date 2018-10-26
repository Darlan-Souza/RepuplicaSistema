<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- As 3 meta tags acima *devem* vir em primeiro lugar dentro do `head`; qualquer outro conteúdo deve vir *após* essas tags -->
    <title>Helpublica</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Arquivo CSS -->
    <link rel="stylesheet" type="text/css" href="../SistemaRepublica/css/style.css">
    <link rel="stylesheet" type="text/less" href="less/responsive.less">

    <!-- HTML5 shim e Respond.js para suporte no IE8 de elementos HTML5 e media queries -->
    <!-- ALERTA: Respond.js não funciona se você visualizar uma página file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <!-- <header class="topo"> -->
      <!-- Navigation -->
   <nav class="navbar navbar-expand-lg navbar-dark bg-gradient-primary">

      <div class="container">

        <a class="navbar-brand h1 mb-0" href="#">Helpublica</a>

          <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarSite">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSite">
             <!-- nr-auto alinhar para a esquerda -->
            <ul class="navbar-nav mr-auto">

                <li class="nav-item">
                  <a href="index.php" class="nav-link">Home</a>           
                </li> 
                <li class="nav-item">
                  <a class="nav-link" href="perfil.php">Perfil</a>            
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="registro.php">Registro</a>            
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Serviços</a>            
                </li>         
                <li class="nav-item">
                  <a class="nav-link" href="#">Contatos</a>            
                </li>
            </ul>

            <!-- nr-auto alinhar para a direita -->
            <ul class="navbar-nav ml-auto" >
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="navDrop">
                    Social
                  </a>
                    <div class="dropdown-menu">
                      <a class="dropdown-item" href="http://facebook.com">Facebook</a>
                      <a class="dropdown-item" href="#">Twitter</a>
                      <a class="dropdown-item" href="#">Instagran</a>
                    </div>

                </li>
            </ul>

            <form class="form-inline">
              <input class="form-control ml-4 mr-2" type="search" placeholder="Buscar..." >
              <button class="btn btn-dark" type="submit">Ok</button>
            </form>

             <ul class="nav ml-auto">
              <li class="nav-item active login">
                <a class="nav-link" href="#Home">Login </a>
              </li>
          </ul>

          <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#MenuApoio" aria-controls="MenuApoio" aria-expanded="false" aria-label="Toggle navigation">
            <img src="img/icon/icon-collapse.png" class="" alt="Menu"/>
          </button>

          </div>
      </div>
    </nav>
    <!-- </header> -->

    <main>
      <div id="carouselSite" class="carousel slide" data-ride="carousel">
      
      <ol class="carousel-indicators">
        <li data-target="#carouselSite" data-slide-to="0" class="active"></li>
        <li data-target ="#carouselSite" data-slide-to="1" ></li>
        <li data-target ="#carouselSite" data-slide-to="2" ></li>
        <li data-target ="#carouselSite" data-slide-to="3" ></li>

      </ol>


      <div class="carousel-inner"> 

        <div class="carousel-item active">
          <img src="img/slide/img1.png" class="img-fluid d-block">   

            <div class="carousel-caption d-none d-md-block text-dark">
              <h1>Sed ut perspiciatis unde</h1>
              <p class="lead">But I must explain to you how all this mistaken idea of denouncing.</p>
            </div>


        </div>
        <div class="carousel-item"> 
          <img src="img/slide/img2.png" class="img-fluid d-block"> 

             <div class="carousel-caption d-none d-md-block text-dark">
              <h1>No one rejects, dislikes</h1>
              <p class="lead">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium.</p>
            </div>

        </div>        
        <div class="carousel-item">
          <img src="img/slide/img3.png" class="img-fluid d-block">  

             <div class="carousel-caption d-none d-md-block text-dark">
              <h1>At vero eos et accusamus</h1>
              <p class="lead">On the other hand, we denounce with righteous indignation and dislike men who are.</p>
            </div>

        </div>
        <div class="carousel-item">
          <img src="img/slide/img4.png" class="img-fluid d-block">  

             <div class="carousel-caption d-none d-md-block text-dark">
              <h1>But who has any right</h1>
              <p class="lead">To take a trivial example, which of us ever undertakes laborious physical exercise, except.</p>
            </div>

        </div>
        <!--Vai pro slide anterior-->
        <a class="carousel-control-prev" href="#carouselSite" role="button" data-slide="prev">
          
          <span class="carousel-control-prev-icon"></span>
          <span class="sr-only">Anterior</span>

        </a>

        <a class="carousel-control-next" href="#carouselSite" role="button" data-slide="next">
          
          <span class="carousel-control-next-icon"></span>
          <span class="sr-only">Avançar</span>
        </a>

      </div>

    </div>

    </main>

    <div class="objetivo">
      <div class="container pd_lr_20">
        <ul class="lis_inf list-unstyled">
          <div class="row">
            <li class="media">
              <div class="col-4 media-body">
                <h4 class="media-heading">
                  Contabilidade
                </h4>
                <div class="media">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                  consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                  cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                  proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </div>
                <a class="float-right" href="">[+]Leia Mais</a> 
              </div>
              <div class="col-2">
                <img src="img/media/media5.png" alt="Midia 1" class="ml-3">
              </div>
            </li>
            <li class="media">
              <div class="col-2">
                <img src="img/media/media5.png" alt="Midia 1" class="ml-3">
              </div>
              <div class="col-4 media-body">
                <h4 class="media-heading">
                  Administração
                </h4>
                <div class="media">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                  consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                  cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                  proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </div>
                <a class="float-right" href="">[+]Leia Mais</a> 
              </div>
            </li>
          </div>
        </ul>
      </div>
    </div>

    <div class="projeto">
      <div class="container">
        <div class="row">
          <div class="col-5">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.          
          </div>

          <div class="linha col-2">
            
          </div>

          <div class="col-5">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.                  
          </div>  
        </div>
      </div>
    </div>

    <div class="contato">
      <div class="container">
        
      </div>
    </div>

    <footer class="copyright">
      <div class="container">
        Direitos Reservados.
      </div>  
    </footer>

    <!-- jQuery (obrigatório para plugins JavaScript do Bootstrap) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Inclui todos os plugins compilados (abaixo), ou inclua arquivos separadados se necessário -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>