<?php

include 'baseDatos/conexion.php';



$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$telefono = $_POST['telefono'];
$tamano_grupo = $_POST['tamano_grupo'];

$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
  die("Conexión fallida: " . $conn->connect_error);
}

$sql = "INSERT INTO reservas (nombre, correo, telefono, tamano_grupo) VALUES ('$nombre', '$correo', '$telefono', $tamano_grupo)";

if ($conn->query($sql) === TRUE) {
  echo "Reserva realizada con éxito";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>
