<?php
// Configurações de conexão
$host = "localhost";
$usuario = "root";
$senha = "";
$banco = "atividade";

// Conexão com o banco
$conn = new mysqli($host, $usuario, $senha, $banco);

$conexao = mysqli_connect($host, $usuario, $senha, $banco);
        
        if(!$conexao){
            die("deu ruim " . mysqli_connect_error());
        }

        /* fim da conexao */
        ?>

