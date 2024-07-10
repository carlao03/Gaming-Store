<?php
require_once "config.php";

if(isset ($_POST['entrar'])){
    $cpf = $_POST['cpf'];
    $nome = $_POST['nome'];
    $senha = $_POST['senha'];
    $sql = "SELECT cpf, nome, senha FROM admin WHERE cpf = '$cpf' AND nome = '$nome' AND senha = '$senha'";
    $result = mysqli_query($conn, $sql);
    
    if(mysqli_num_rows($result) > 0){
        session_start();
        $_SESSION['admin'] = true;

    header('location:admin.php');
    }
}

$html = file_get_contents('login.html');
echo $html;
?>