<?php
include_once 'controller/pdo.php';

session_start();

if(!isset($_SESSION["usuario"])){
    header('Location: index.html');
}

//print_r($_SESSION);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="Semantic/semantic.min.css">
    <link rel="stylesheet" type="text/css" href="Semantic/semantic.css">
    <link rel="stylesheet" type="text/css" href="css/menu.css">
    <script src="https://code.jquery.com/jquery-1.9.1.js"></script>
    <script src="Semantic/semantic.min.js"></script>
    <script src="Semantic/semantic.js"></script>
    <script src="js/menu.js"></script>
    <meta charset="ISO-8859-1">
    <title>Document</title>
</head>
<body>



  <div class="ui secondary  menu" id="header">
    <a class="item" href="menu.php">
      Menu
    </a>
    <a class="item">
      Gerenciador de projetos
    </a>
    <div class="right menu">
      <a class="ui item" id="deslogar" onclick='logoutckview();'>
        Logout
      </a>
    </div>
  </div>


  <div class="ui grid">

    <div class="row" style="border: 1px solid black">
      <div class="three wide column" style="border-right:1px solid black; text-align:center;">
      <p>Todas as minhas tabs</p>
      </div>
      <div class="ten wide column">
        <p></p>
      </div>
      <div class="three wide column">
        
      </div>
    </div>





    <div class="row" style="border: 0px solid black;">
      <div class="three wide column">
     
      </div>
      <div class="ten wide column">
        <p></p>
      </div>
      <div class="three wide column">
      
      </div>
    </div>

</div>




<!-- modais -->

<div class="ui mini modal" id="logoutModal">
  <div class="header">Logout.</div>
  <div class="content">
    <p>Deseja deslogar do sistema?</p>
  </div>
  <div class="actions">
    <div class="ui button"  onclick='logoutck();' >Sim</div>
    <div class="ui button"  onclick='recusaLogout();' >Voltar</div>
  </div>
</div>



</body>
</html>