<?php

include_once "pdo.php";
session_start();




$stmt = $conn->prepare("SELECT id as id, nome as nome, criacao_datahora as criacao_datahora, IFNULL(edicao_datahora, '') as edicao_datahora, publicado as publicado FROM projetos WHERE usuario_id=:id");
$stmt->execute(array(
    ':id' =>  $_SESSION['id'],
  ));
$projetos = $stmt->fetchAll();


$resultado = json_encode($projetos);

print_r($resultado);

?>