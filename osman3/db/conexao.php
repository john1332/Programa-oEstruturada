<?php 
include("config.php");

$conexao = mysqli_connect(SERVIDOR,USUARIO,SENHA,BANCO) or die("ERROR na conexao com o servidor".mysqli_connect_error());