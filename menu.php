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
    <i class="home icon" style="margin-right:5px;"></i> Menu
    </a>
    <a class="item" onclick='gerenciadorScreen();'>
    <i class="folder icon" style="margin-right:5px;"></i> Gerenciador de projetos 
    </a> 
    <div class="right menu">
      <a class="ui item" id="deslogar" onclick='logoutckview();'>
      <i class="power off icon" style="margin-right:5px"></i> Logout
      </a>
    </div>
  </div>


  <div class="ui grid" style="border: 1px solid black;display:block;">

    <div class="row" style="border-bottom: 1px solid black; height:45px;">
      <div class="three wide column" style="border-right:1px solid black; text-align:center;">
      <p>Todas as minhas tabs</p>
      </div>
      <div class="ten wide column">
        <p></p>
      </div>
      <div class="three wide column">
        
      </div>
    </div>





    <div class="row" style="border: 1px solid red;display:block;">
      <div class="three wide column"  style="border-right:1px solid black; text-align:center;">
          <p>Todas as minhas tabs</p>
          <p>Todas as minhas tabs</p>
          <p>Todas as minhas tabs</p>
          <p>Todas as minhas tabs</p>
          <p>Todas as minhas tabs</p>
          <p>Todas as minhas tabs</p>
          <p>Todas as minhas tabs</p>
          <p>Todas as minhas tabs</p>
      </div>
      <div class="ten wide column">
        <p></p>
      </div>
      <div class="three wide column">
      
      </div>
    </div>

</div>




<!-- modais -->
<?php 
include 'logout.php';
include 'genrenciadorProjeto/gerenciador.php';
?>

</body>
</html>