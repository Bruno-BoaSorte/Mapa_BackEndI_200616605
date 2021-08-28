<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/header.css">
    <title> ART&AÇUCAR </title>
    <style>
      
    </style>
    
</head>
<body>
  
<div id="menu" class="container text-center">
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="./index.php?p=home"><img class="logo" src="./img/LogoTipo.png" alt="Logo Art&Acuçar" width="150" height="100" ></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div  class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="./index.php?p=home">Home<span class="sr-only"></span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./index.php?p=quemsomos">Quem somos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./index.php?p=contato">Contatos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./index.php?p=localizacao">Localização</a>
        </li>
      </ul>
    </div>
  </nav>
  <hr>
</div>
<?php 

//aqui consta os dados
include 'dados/dados.php';
//$pagina = 'home';
include "./function/functions.php";

?>

<footer>
  
  <div id="footer_id" class="container">
     <p> <img src="./img/unnamed.png" width="85" height="50">   2021 | MAPA | Aluno: BRUNO J. VASCONCELOS BOA SORTE  | RA: 20061660-5 | Curso: SISTEMAS PARA INTERNET</p>
  </div>
 <div>
 
</footer>
<script src="./js/bootstrap.min.js"></script>
</body>
</html>