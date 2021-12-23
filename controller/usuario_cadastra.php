<?php

include_once "pdo.php";


function valida_valores($nome, $sobrenome, $email, $senha, $confirmacao_senha, $response){
   
    if($nome == ""){
        $response['status'] = 'nome';
        echo json_encode($response);
        die();
    }
    if($sobrenome == ""){
        $response['status'] = 'sobrenome';
        echo json_encode($response);
        die();
    }
    if($email == ""){
        $response['status'] = 'email2';
        echo json_encode($response);
        die();
    }

    if($senha != $confirmacao_senha || $senha == ""){
        $response['status'] = 'senhas';
        echo json_encode($response);
        die();
    }
}


$nome_request = $_REQUEST["nome"];
$sobrenome = $_REQUEST["sobrenome"];
$email = $_REQUEST["email"];
$senha = $_REQUEST["senha"];
$confirmacao_senha = $_REQUEST["comfirma_senha"];
$response = array();


$nome = explode(" ", $nome_request);


valida_valores($nome[0], $sobrenome, $email, $senha, $confirmacao_senha, $response);


$consulta_usuario = $conn->query("SELECT nome, email FROM usuarios WHERE email = '$email';");
$count = $consulta_usuario->rowCount();
if($count > 0){
    $response['status'] = 'email1';
    echo json_encode($response);
    return;
}




$stmt = $conn->prepare("INSERT INTO usuarios (nome, sobrenome, senha, email, criacao_datahora) VALUES (:nome,:sobrenome,:senha,:email,NOW())");
$stmt->execute(array(
    ':nome' => $nome[0],
    ':sobrenome' => $sobrenome,
    ':senha' => md5($senha),
    ':email' => $email,

  ));

  $response['status'] = 'success';
  echo json_encode($response);


?>