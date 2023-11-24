<?php
// Start the session
session_start();
$_SESSION["infosesion"] = "bye";
header('Location: index.php');

?>