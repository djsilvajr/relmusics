<?php

include_once "pdo.php";


$email = $_REQUEST["email"];
$senha = $_REQUEST["senha"];

$consulta_usuario = $conn->query("SELECT id, nome, senha, email FROM usuarios WHERE email = '$email' and senha = '".md5($senha)."';");
$count = $consulta_usuario->rowCount();
if($count > 0){


    foreach ($consulta_usuario as $row) {
        
        session_start();
        $_SESSION["id"] = $row["id"];
        $_SESSION["usuario"] = $row["nome"];
        $_SESSION["email"] = $row["email"];
        $response['status'] = 'success';
        echo json_encode($response);
        return;
    }

    //print_r($consulta_usuario["nome"]);
    die();


}else{
    $response['status'] = 'erro';
    echo json_encode($response);
    return;
}


?>