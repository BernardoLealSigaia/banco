<?php
    include "conecta.php";
    echo "<br><br>";

    echo "<b>Mostrando todos os registros</b><br>";
    $sql = "SELECT id, nome, senha, email FROM usuario";
    $resultado = mysqli_query($conexao, $sql);
    echo "<br>";

    if (mysqli_num_rows($resultado) > 0){
        while($registro = mysqli_fetch_assoc($resultado)) {
        echo "id: " . $registro["id"]. " - Nome: " . $registro["nome"].
        " " . $registro["senha"]. " - Email:" . $registro["email"].
        "<br>";
        }
    } else{
        echo "Nenhum registro encontrado.";
    }


    //segunda consulta
    echo "<br><b>Nomes que começam com 'c' </b><br>";
    $sql = "SELECT id, nome, senha, email FROM usuario where nome like 'b%'";
    $resultado = mysqli_query($conexao, $sql);
    echo "<br>";

    if (mysqli_num_rows($resultado) > 0){
        while($registro = mysqli_fetch_assoc($resultado)) {
        echo "id: " . $registro["id"]. " - Nome: " . $registro["nome"].
        " " . $registro["senha"]. " - Email:" . $registro["email"].
        "<br>";
        }
    } else{
        echo "Nenhum registro encontrado.";
    }

    //terceira consulta
    echo "<br><b>Ordenar registros por email</b><br>";
    $sql = "SELECT id, nome, senha, email FROM usuario order by email";
    $resultado = mysqli_query($conexao, $sql);
    echo "<br>";

    if (mysqli_num_rows($resultado) > 0){
        while($registro = mysqli_fetch_assoc($resultado)) {
        echo "id: " . $registro["id"]. " - Nome: " . $registro["nome"].
        " " . $registro["senha"]. " - Email:" . $registro["email"].
        "<br>";
        }
    } else{
        echo "Nenhum registro encontrado.";
    }

    
?>