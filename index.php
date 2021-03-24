<!DOCTYPE html>
<html lang="pt-br">

    <head>
        <meta charset="UTF-8">

          <title> Home+ </title>
          
          <link rel="shortcut icon" href=".\imagens\favicon.ico">

          <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

          <style>
           @import url('https://fonts.googleapis.com/css2?family=Blinker&display=swap');

            div.cont-card{
              margin-left: 5%;
              margin-right: 5%;
              margin-top: 10%;
            }

            h4.card-title{
              text-align: center;
              margin-bottom: 5%;
              font-family: 'Blinker', sans-serif;
            }

            p.card-text{
              text-align: justify;

            }

            div.card{
              border: 0.5px rgb(240, 154, 000) solid;
              box-shadow: 10px 10px 20px 1px rgb(240, 154, 000);
            }

            div.card:hover{
              transform: scale(1.05,1.05);
              font-size: 14pt;
              cursor:inherit;
            }

            p.card-text{
              cursor:auto;
            }

          </style>

        
    </head>
    <body>

    <!-- Navbar -->

    <nav class="navbar navbar-expand-lg navbar-light" id="navbar">
      <div class="container-fluid">
        <a class="navbar-brand" href="#"> <img src="./imagens/Home+3.png" width="60" height="50" alt=""> </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">  Início  </a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#sobre">  Sobre nós  </a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
             Já tem uma conta?
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="./html/loginCliente.php">Entre como Cliente </a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="./html/loginTrabalhador.php">Entre como Trabalhador</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
             Cadastre-se!
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="./html/formularioCliente.php">Cadastre-se como Cliente </a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="./html/formularioTrabalhador.php">Cadastre-se como Trabalhador</a></li>
            </ul>
          </li>
            </ul>
          </li>
      </div>
      </div>
    </nav>

    <!-- Fim navbar -->

    <!-- Carousel -->

      <div class="container">
      <div id="carouselHomeplus" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselHomeplus" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselHomeplus" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselHomeplus" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src=".\imagens\carouselSlide1.2.jpeg" class="d-block w-100" alt="..." height="500" width="300">
        </div>
        <div class="carousel-item">
          <img src=".\imagens\carouselSlide2.jpeg" class="d-block w-100" alt="..." height="500" width="300">
        </div>
        <div class="carousel-item">
          <img src=".\imagens\carouselSlide3.jpeg" class="d-block w-100" alt="..." height="500" width="300">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselHomeplus"  data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselHomeplus"  data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
      </div>
      </div>

      <!-- Fim carousel -->

      <!-- Cards -->



<div class="cont-card">
  <div class="row row-cols-1 row-cols-md-3 g-4">
    <div class="col">
      <div class="card h-100">
        <img src="./imagens/cardImg3-1.jpeg" class="card-img-top" alt="...">
        <div class="card-body">
          <h4 class="card-title">Economia</h4>
          <p class="card-text">This card has supporting text below as a natural   lead-in to additional content.This is a wider card with supporting text below as a   natural lead-in to additional content. This content is a little bit longer. </p>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card h-100">
        <img src="./imagens/cardImg2-1.jpeg" class="card-img-top" alt="...">
        <div class="card-body">
          <h4 class="card-title">Qualidade</h4>
          <p class="card-text">This card has supporting text below as a natural   lead-in to additional content.This is a wider card with supporting text below as a   natural lead-in to additional content. This content is a little bit longer. </p>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card h-100">
        <img src="./imagens/cardImg1-1.jpeg" class="card-img-top" alt="...">
        <div class="card-body">
          <h4 class="card-title">Variedade</h4>
          <p class="card-text">This is a wider card with supporting text below as a   natural lead-in to additional content. This card has even longer content  than the first to show that equal height action.</p>
        </div>
      </div>
    </div>
  </div>
</div>
      <!-- Fim cards -->

      <!-- Sobre nos -->

      <h1 id="sobre">A</h1>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

    </body>
</html>