<?php
include 'db.php';


$sql = "INSERT INTO mediciones_amd
(placa_modelo, procesador_modelo, procesador_nombre, vddcore, apu_vddsoc, vddcr_soc, ram, vddp_alwp, valw_0_9, valw_0_75)
VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

$stmt = $con->prepare($sql);
$stmt->bind_param('sssddddddd',
    $_POST['placa_modelo'],
    $_POST['procesador_modelo'],
    $_POST['procesador_nombre'],
    $_POST['vddcore'],
    $_POST['apu_vddsoc'],
    $_POST['vddcr_soc'],
    $_POST['ram'],
    $_POST['vddp_alwp'],
    $_POST['valw_0_9'],
    $_POST['valw_0_75']
);
$stmt->execute();
$stmt->close();
header('Location: registrar_amd.php'); exit;
?>