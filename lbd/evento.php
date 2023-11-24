<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "deportivo";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    $conn->connect_error;
}

$nombreEvento = $_POST['nombre_evento'];
$tipoEvento = $_POST['tipo_evento'];
$fechaEvento = $_POST['fecha_evento'];

$sql = "INSERT INTO eventos (nombre, tipo, fecha) VALUES ('$nombreEvento', '$tipoEvento', '$fechaEvento')";

if ($conn->query($sql) === TRUE) {
    echo "";
} else {
    $conn->error;
}
header("Location: eventos.html?envio_exitoso=true");


$conn->close();
?>