<?php 
include 'db.php';

$sql = "INSERT INTO mediciones 
(placa_modelo, procesador_modelo, procesador_nombre, cpu_core, vccsa, vccgt, pch, ram) 
VALUES (?, ?, ?, ?, ?, ?, ?, ?)";

$stmt = $con->prepare($sql);
$stmt->bind_param(
    "sssddddd",
    $_POST['placa_modelo'],
    $_POST['procesador_modelo'],
    $_POST['procesador_nombre'],
    $_POST['cpu_core'],
    $_POST['vccsa'],
    $_POST['vccgt'],
    $_POST['pch'],
    $_POST['ram']
);

if ($stmt->execute()) {
    echo "Datos guardados correctamente.<br><a href='registrar_intel.php'>Volver</a>";
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$con->close();
?>