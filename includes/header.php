<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script  src='./js/main.js'></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/main.css">
    <title>webStore</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-secondary fixed-top mb-3">
      <i class="text-white fas fa-store fa-2x"></i> <a class="navbar-brand text-light mr-5 mt-2" href="#">WebStore</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    <div class="collapse navbar-collapse " id="navbarSupportedContent">
        <ul class="navbar-nav">
          <li class="nav-item ">
            <a id="home" class="nav-link text-light" href="index.php">Home<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item ">
            <a id="Products" class="nav-link text-light" href="#">Productos</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-light" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Categorias</a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="#">Technology and Electronic</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Sport and Fitness</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">clothes and fashion</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Books</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Music</a>
            </div>
          </li>
      </ul>
    </div>
    <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
      <form class="form-inline ">
            <div class="input-group ">
              <input type="text" class="form-control" id="search" placeholder="Search">
              <div class="input-group-append">
                  <button type="submit" class="btn btn-primary input-group-text"><i class="fas fa-search"></i></button>          
              </div>
              
            </div>
      </form>
    </div>
    <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
      <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link text-light" href="logout.php"><i class="fas fa-sign-out-alt"></i>Salir</a>
          </li>
      </ul>
    </div>
</nav> 
  
