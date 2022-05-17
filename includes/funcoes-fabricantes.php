<?php

require "conecta.php";

function lerFabricantes($conexao){
    // 1º Montar a string do comendo SQL
    $sql = "SELECT id, nome FROM fabricantes"; // o * serve para trazer todos

    // 2º Executar o comando 
    $resultado = mysqli_query($conexao, $sql) or die(mysqli_error($conexao)); // "or die" ajuda a indicar erros caso o query falhe

    // 3º Criar um array vazio para receber os resultados
    $fabricantes = []; //ARRAYZÃO - PRINCIPAL

    // 4º Loop iterando em cada resultado e a cada um (fabricante) que for localizado, é acrescentado ao array fabricantes (deixado vazio acima)
    while( $fabricante = mysqli_fetch_assoc($resultado) ){
        array_push($fabricantes, $fabricante);
    }

    //5º Retornando para fora da função os fabricantes localizados
    return $fabricantes; //Lista de fabricantes (matriz)

}

// var_dump(lerfabricantes($conexao)); - teste

function inserirFabricante($conexao, $nome){
    $sql = "INSERT INTO fabricantes(nome) VALUES('$nome')";
    mysqli_query($conexao, $sql) or die(mysqli_error($conexao));

}