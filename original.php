<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- As 3 meta tags acima *devem* vir em primeiro lugar dentro do `head`; qualquer outro conteúdo deve vir *após* essas tags -->
    <title>Index</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Arquivo CSS -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/less" href="less/responsive.less">

    <!-- HTML5 shim e Respond.js para suporte no IE8 de elementos HTML5 e media queries -->
    <!-- ALERTA: Respond.js não funciona se você visualizar uma página file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <header class="topo">
      <div class="container">
        <div class="row">
          <button class="navbar-toggler hidden-desktop" type="button" data-toggle="collapse" data-target="#navCollapse" aria-controls="navCollapse" aria-expanded="false" aria-label="Menu Navegação">
            <span class="navbar-toggler-icon"></span>
          </button>             
          

          <div class="col">
            <div class="area_logo">
              <a class="navbar-brand" href="index.php" title="Slogan Projeto">
                <img src="img/logo/logo11.png" class="d-inline-block align-top logo" alt="Slogan Projeto"/>
                <!--Projeto Engenharia Web-->
              </a>
            </div>
          </div>
          <div class="col-9">
            <ul class="nav collapse navbar-collapse nav-pills nav-fill justify-content-end" id="navCollapse">
              <li class="nav-item">
                <a class="nav-link active" href="#">Início</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">República</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Eventos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Localização</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Sobre Nós</a>
              </li>
            </ul> 
          </div>  
        </div>
      </div>
    </header>

    <main>
      <div class="banner">
        <div class="container">
          <div class="row">
            <div id="myCarousel" class="carousel slide carousel-fade col-12" data-ride="carousel">
              <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1" ></li>
                <li data-target="#myCarousel" data-slide-to="2" ></li>
              </ol>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="../EngWEB/img/slide/slide_1.jpg" class="d-block w-100" alt="">
                  <div class="carousel-caption">
                    <h4>Seja Bem-Vindo</h4>
                    <p>Estamos aqui para demonstrar o melhor e mais prático sistema de controle de República. Então, não se preocupem e deixem com a gente.</p>
                  </div>
                </div>
                <div class="carousel-item">
                  <img src="../EngWEB/img/slide/slide_2.jpg" class="d-block w-100" alt="">
                  <div class="carousel-caption">
                    <h4>Seja Bem-Vindo</h4>
                    <p>Estamos aqui para demonstrar o melhor e mais prático sistema de controle de República. Então, não se preocupem e deixem com a gente.</p>
                  </div>
                </div>
                <div class="carousel-item">
                  <img src="../EngWEB/img/slide/slide_3.jpg" class="d-block w-100" alt="">
                  <div class="carousel-caption">
                    <h4>Seja Bem-Vindo</h4>
                    <p>Estamos aqui para demonstrar o melhor e mais prático sistema de controle de República. Então, não se preocupem e deixem com a gente.</p>
                  </div>
                </div>
              </div>
              <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
          </div>
        </div>
      </div>

      <div class="container pd_lr_20">
        <div class="row">
          <div class="col-4 coluna1">
            Bem Vindo! <br><br>
            <!-- facebook -->
            <SCRIPT LANGUAGE="JAVASCRIPT">
            <!--

            var now = new Date();
            var mName = now.getMonth() +1 ;
            var dName = now.getDay() +1;
            var dayNr = now.getDate();
            var yearNr=now.getYear();
            if(dName==1) {Day = "Domingo";}
            if(dName==2) {Day = "Segunda-feira";}
            if(dName==3) {Day = "Terça-feira";}
            if(dName==4) {Day = "Quarta-feira";}
            if(dName==5) {Day = "Quinta-feira";}
            if(dName==6) {Day = "Sexta-feira";}
            if(dName==7) {Day = "Sábado";}
            if(mName==1){Month = "Janeiro";}
            if(mName==2){Month = "Fevereiro";}
            if(mName==3){Month = "Março";}
            if(mName==4){Month = "Abril";}
            if(mName==5){Month = "Maio";}
            if(mName==6){Month = "Junho";}
            if(mName==7){Month = "Julho";}
            if(mName==8){Month = "Agosto";}
            if(mName==9){Month = "Setembro";}
            if(mName==10){Month = "Outubro";}
            if(mName==11){Month = "Novembro";}
            if(mName==12){Month = "Dezembro";}
            if(yearNr < 2000) {Year = 1900 + yearNr;}
            else {Year = yearNr;}
            var todaysDate =(" " + Day + ", " + dayNr + "/" + Month + "/" + Year);

            document.write('  '+todaysDate);

            //-->
            </SCRIPT>

              
            <SPAN ID="Clock">00:00:00</SPAN>

            <SCRIPT LANGUAGE="JavaScript">
            <!--
              var Elem = document.getElementById("Clock");
              function Horario(){ 
                var Hoje = new Date(); 
                var Horas = Hoje.getHours(); 
                if(Horas < 10){ 
                  Horas = "0"+Horas; 
                } 
                var Minutos = Hoje.getMinutes(); 
                if(Minutos < 10){ 
                  Minutos = "0"+Minutos; 
                } 
                var Segundos = Hoje.getSeconds(); 
                if(Segundos < 10){ 
                  Segundos = "0"+Segundos; 
                } 
                Elem.innerHTML = Horas+":"+Minutos+":"+Segundos; 
                } 
                window.setInterval("Horario()",1000);
            //-->
            </SCRIPT>
            <!-- end facebook -->
          </div>
          <div class="col-8">
            <div class="row">
              <ul class="lis_inf list-unstyled">
                <li class="media">
                  <div class="col-2">
                    <img src="img/media/media5.png" alt="Midia 1" class="mr-3">
                  </div>
                  <div class="col media-body">
                    <h4 class="media-heading">
                      Titulo do seu Post
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
                <li class="media">
                  <div class="col-2">
                    <img src="img/media/media5.png" alt="Midia 1" class="mr-3">                  
                  </div>
                  <div class="col media-body">
                    <h4 class="media-heading">
                      Titulo do seu Post
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
                <li class="media">
                  <div class="col-2">
                    <img src="img/media/media5.png" alt="Midia 1" class="mr-3">
                  </div>
                  <div class="col media-body">
                    <h4 class="media-heading">
                      Titulo do seu Post
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
              </ul>
            </div>
          </div>
        </div>
      </div>

    </main>

    <footer>
      <div class="container pd_lr_20">
        <div class="row">
          <div class="col-12 rodape">
            <div class="row">
              <div class="col-4">
                <span class="sp_tit">
                  Newsletter
                </span>
                <form method="POST" action="">
                  <input type="text" name="nome" placeholder="Nome"></br></br>
                  <input type="email" name="email" placeholder="Email">
                  </br></br>
                  <button type="submit" class="btn-primary">Enviar</button>
                </form>
              </div>
              <div class="col-5">
                <span class="sp_tit">
                  Localização
                </span>
                <a href="">
                  <img src="img/media/media6.jpg" alt="Localização Projeto">
                </a>
              </div>
              <div class="col-3">
                <span class="sp_tit">
                  Entre em Contato
                </span>
                <ul class="list-unstyled contato">
                  <li>(38) 9999-9999</li>
                  <li>(38) 3521-3333</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>

    <div class="col-12">    
        <div class="row">
          <div class="copyright">
            Direitos Reservados.
          </div>  
      </div>
    </div>

    <!-- jQuery (obrigatório para plugins JavaScript do Bootstrap) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Inclui todos os plugins compilados (abaixo), ou inclua arquivos separadados se necessário -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>