<?php

//ini_set ('max_execution_time', 0);

require 'conexao.php';

//BUSCA O ARQUIVO DA CONEXAO COM BANCO DE DADOS


//LOCALIZA O ARQUIVO CSV
$filename= 'C:/xampp2/htdocs/projeto/itens.csv';


//CONDIÇÃO PARA A LEITURA E GRAVAÇÃO
if(file_exists($filename)){

   if(mysqli_query($conecta, "LOAD DATA INFILE '$filename' INTO TABLE itens
    FIELDS TERMINATED BY ';' 
    LINES TERMINATED BY '\n'
    IGNORE 1 ROWS")){
        //SERÁ IDENTIFICADO O ; DE CADA DADO COMO SENDO CSV, E AO FINAL DE CADA LINHA SERÁ QUEBRADO COM "\n" E SERA IGNORADO A PRIMEIRA LINHA DOS TITULOS.
        //TODAS AS CELULAS QUE ESTAO VAZIAS SERÃO ZERO NO MYSQL
        echo "carregado com sucesso!";
    }else{
        echo "nao deu boa!";
    }

     
}else {
    echo "arquivo não existe!";
}






?>

