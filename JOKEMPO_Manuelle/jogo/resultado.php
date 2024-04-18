<?php

$host = "localhost:3306";
$user = "root";
$pass = "";
$base = "banco";
$con = mysqli_connect($host, $user, $pass, $base);


$escolha = $_POST["escolha"];
$nome = $_POST["nome"];
$escolhaComputador = rand(1, 3);
$empates = 0;
$vitorias = 0;
$derrotas = 0;

if(($escolha == 1) && ($escolhaComputador == 1)){
    echo "<p>" . $nome . ": <img src='pedra.png'</p>";
    echo "<p>Computador: <img src='pedra.png'</p>";
    echo "<p>EMPATE</p>";
    $empates++;
} elseif(($escolha == 1) && ($escolhaComputador == 2)){
    echo "<p>" . $nome . ": <img src='pedra.png'</p>";
    echo "<p>Computador: <img src='papel.png'</p>";
    echo "<p>Você perdeu!!</p>";
    $derrotas++;
} elseif(($escolha == 1) && ($escolhaComputador == 3)){
    echo "<p>" . $nome . ": <img src='pedra.png'</p>";
    echo "<p>Computador: <img src='tesoura.png'</p>";
    echo "<p>PARABÉNS!! Você ganhou!</p>";
    $vitorias++;
}elseif(($escolha == 2) && ($escolhaComputador == 1)){
    echo "<p>" . $nome . ": <img src='papel.png'</p>";
    echo "<p>Computador: <img src='pedra.png'</p>";
    echo "<p>PARABÉNS!! Você ganhou!</p>";
    $vitorias++;
}elseif(($escolha == 2) && ($escolhaComputador == 2)){
    echo "<p>" . $nome . ": <img src='papel.png'</p>";
    echo "<p>Computador: <img src='papel.png'</p>";
    echo "<p>EMPATE</p>";
    $empates++;
}elseif(($escolha == 2) && ($escolhaComputador == 3)){
    echo "<p>" . $nome . ": <img src='papel.png'</p>";
    echo "<p>Computador: <img src='tesoura.png'</p>";
    echo "<p>Você perdeu!</p>";
    $derrotas++;
}elseif(($escolha == 3) && ($escolhaComputador == 1)){
    echo "<p>" . $nome . ": <img src='tesoura.png'</p>";
    echo "<p>Computador: <img src='pedra.png'</p>";
    echo "<p>Você perdeu!</p>";
    $derrotas++;
}elseif(($escolha == 3) && ($escolhaComputador == 2)){
    echo "<p>" . $nome . ": <img src='tesoura.png'</p>";
    echo "<p>Computador: <img src='papel.png'</p>";
    echo "<p>PARABÉNS!! Você ganhou!</p>";
    $vitorias++;
}elseif(($escolha == 3) && ($escolhaComputador == 3)){
    echo "<p>" . $nome . ": <img src='tesoura.png'</p>";
    echo "<p>Computador: <img src='tesoura.png'</p>";
    echo "<p>EMPATE</p>";
    $empates++;
}else {
    echo "Um número digitado não é compativel";
}



$res2 = mysqli_query($con, "INSERT INTO jogadas (nome, escolha, maquina, vitorias, derrotas, empates) VALUES ('$nome', '$escolha', '$escolhaComputador','$vitorias','$derrotas','$empates')");


?>