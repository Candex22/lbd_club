<?php
// Start the session
session_start();

$servername="localhost";
$username="root";
$password="";
$dbname= "deportivo";
$conexion=new mysqli($servername,$username,$password,$dbname);


$mail=$_POST['mail'];
$contrasena=$_POST['contrasena'];


$sql = "SELECT COUNT(*) as total FROM afiliados WHERE mail = '$mail' AND contraseña='$contrasena'";
$resultado = $conexion->query($sql);
$fila = $resultado->fetch_assoc();


if ($fila["total"] > 0) {
    $sqlNom = "SELECT nombre FROM afiliados WHERE mail = '$mail' AND '$contrasena'";
    $resultadoNom = $conexion->query($sqlNom);
    $_SESSION["infonombre"] = mysqli_fetch_array($resultadoNom)[0];
    $_SESSION["infosesion"] = "exito";
    header('Location: indexx.php');

} else {

    
    $_SESSION["infosesion"] = "error";
    header('Location: signin.php');
}


if(mysqli_query($conexion, $sql)){
    $success = "el ingreso ha sido satisfactorio";
    
}
else{
    echo "Error de ingreso ".mysqli_error($conexion);    
}


?>