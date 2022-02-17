<?php

session_start(); //INICIA A CONEXÃO


//DADOS DO BANCO DE DADOS
$hostname="localhost";
$username="root";
$password="";
$dbname="itens";

//VARIAVEL QUE RECEBE A CONEXÃO COM O BANCO DE DADOS
$conecta = mysqli_connect($hostname,$username, $password, $dbname);
mysqli_set_charset($conecta, "utf8"); // FORMATAÇÃO PARA UFT8

?>