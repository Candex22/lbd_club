<?php
// Start the session
session_start();

$servername="localhost";
$username="root";
$password="";
$dbname= "deportivo";
$conexion=new mysqli($servername,$username,$password,$dbname);


$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$dni=$_POST['dni'];
$mail=$_POST['mail'];
$contrasena=$_POST['contrasena'];



$sql = "SELECT COUNT(*) as total FROM afiliados WHERE mail = '$mail'";
$resultado = $conexion->query($sql);
$fila = $resultado->fetch_assoc();

if ($fila["total"] > 0) {
    $_SESSION["inforegistro"] = "error";
    header('Location: ./signin.html');
} else {
    $sql = "INSERT INTO afiliados ( `nombre`, `apellido`, `dni`,`mail`,`contraseña`) VALUES ( ' $nombre', '$apellido', '$dni','$mail','$contrasena');";
    $_SESSION["infosesion"] = "exito";
    $_SESSION["infonombre"]= $nombre;
    $_SESSION["inforegistro"] = "aaa";
    header('Location: ./indexx.php');
}



echo "MAIL ya utilizado";
if(mysqli_query($conexion, $sql)){
    $success = "el ingreso ha sido satisfactorio";
    echo $success;
    
}
else{
    echo "Error de ingreso ".mysqli_error($conexion);    
}

?>

?>