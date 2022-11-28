<?php
session_start();
$_SESSION['Nombre'] = $_POST['Nombre'];
$_SESSION['Direccion'] = $_POST['Direccion'];
$_SESSION['Telefono'] = $_POST['Telefono'];
header("location:../WebPedidos\BrasaLocaWeb.php");
?>