<?php

include_once("conexao.php");

$entrar = $_POST['entrar'];


$nome = $_POST['nome'];
$cpf = $_POST['cpf'];

$conexao= mysqli_connect($hostname,$user,$password,$database);

  if (isset($entrar)) {

    $verifica = mysql_query("SELECT * FROM funcionario WHERE nome =
    '$nome' AND cpf = '$cpf'") or die("erro ao selecionar");
      if (mysql_num_rows($verifica)<=0){
        echo"<script language='javascript' type='text/javascript'>
        alert('nome e/ou cpf incorretos');window.location
        .href='login.html';</script>";
        die();
      }else{
        setcookie("nome",$nome);
        header("Location:index.php");
      }
  }
?>
