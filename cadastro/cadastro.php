<?php
include("conexao.php");
	$nome=$_POST['nome'];
	$idade=$_POST['idade'];
	$cpf=$_POST['cpf'];
    $mes=$_POST['mes'];
	
	$sql = "INSERT INTO pessoas (nome, idade, cpf, mes) VALUES ('$nome', '$idade', '$cpf', '$mes')";
	if(mysqli_query($conexao, $sql)){
		header("Location: teste.html");
	}else{
		echo "Erro". mysqli_connect_error($conexao);
	}
	
	mysqli_close($conexao);
?>