<?php
$banco="desenvolvimento";
$servername="db";
$username="root";
$password="mysql";
$conn = new mysqli($servername, $username, $password, $banco);

if($conn->connect_error){
  die("Erro na conexão...". $conn->connect_error);
}
echo "Conectou...";

$res = $conn->query("SELECT * from usuario");

echo "<pre>";
print_r($res->fetch_all());

?>