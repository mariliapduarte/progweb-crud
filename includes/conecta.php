<!-- para conectar o site com o banco de dados, precisamos abrir uma conexão com o banco de dados -->


<?php

//Parametros do servidor de BD

$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "vendas_marilia";

//Conectando ao servidor - fazer na ordem exata

$conexao = mysqli_connect($servidor, $usuario, $senha, $banco);

// Habilitando o superto ao charset utf8
mysqli_set_charset($conexao, "utf8");

// TESTE PROVISÓRIO 

/* if($conexao){
     echo "tudo ok";
} */

