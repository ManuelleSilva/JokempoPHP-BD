<?php
$host = "localhost:3306";
$user = "root";
$pass = "";
$base = "banco";
$con = mysqli_connect($host, $user, $pass, $base);

$res = mysqli_query($con, "SELECT * FROM Jogadas ORDER BY nome");

echo "<table border='1px'><tr><td>Jogador</td><td>Escolha</td><td>Máquina</td><td>Vitórias</td><td>Derrotas</td><td>Empates</td></tr>";
while ($escrever = mysqli_fetch_array($res)) {
    echo "<tr><td>" . $escrever['nome'] . "</td><td>" . $escrever['escolha'] . "</td><td>" . $escrever['maquina'] . "</td><td>" . $escrever['vitorias'] . "</td><td>" . $escrever['derrotas'] . "</td><td>" . $escrever['empates'] . "</td></tr>";
}
echo "</table>";
echo "</br><br>";

mysqli_close($con);
?>