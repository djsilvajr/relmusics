<?php


include_once "pdo.php";
session_start();


$usuario_id = $_SESSION["id"];


$nome_projeto = $_POST['nome_projeto'];



 $stmt = $conn->prepare("INSERT INTO projetos (usuario_id, nome, criacao_datahora, publicado) VALUES (:usuario_id,:nome,NOW(), :publicado)");
 $stmt->execute(array(
     ':usuario_id' => $usuario_id,
     ':nome' => $nome_projeto,
     ':publicado' => "N",

   ));

   $response['status'] = 'success';
   echo json_encode($response);


?>