<?php 
include 'db.php';
$id = $_POST['id'];
$placa_modelo = $_POST['placa_modelo'];
$procesador_modelo = $_POST['procesador_modelo'];
$procesador_nombre = $_POST['procesador_nombre'];
$cpu_core = $_POST['cpu_core'];
$vccsa = $_POST['vccsa'];
$vccgt = $_POST['vccgt'];
$pch = $_POST['pch'];
$ram = $_POST['ram'];

$con->query("UPDATE mediciones SET 
    placa_modelo='$placa_modelo', 
    procesador_modelo='$procesador_modelo', 
    procesador_nombre='$procesador_nombre', 
    cpu_core='$cpu_core', 
    vccsa='$vccsa', 
    vccgt='$vccgt', 
    pch='$pch', 
    ram='$ram' 
    WHERE id=$id");

    header("Location: listar_intel.php");