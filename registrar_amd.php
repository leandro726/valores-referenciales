<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    header("Location: login.php");
    exit;
}

include 'header.php';
include 'db.php';
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://cdn.tailwindcss.com"></script>

        <title >Valores Referenciales</title>
</head>
 <body class="bg-gray-100 font-sans p-6">
<div class="p-6 max-w-xl mx-auto">
  <h2 class="text-2xl font-bold mb-4">Registrar valores - AMD</h2>
  <form action="guardar_amd.php" method="POST" class="space-y-4">
    <input type="text" name="placa_modelo" placeholder="Modelo de placa" class="border p-2 rounded w-full" required>
    <input type="text" name="procesador_modelo" placeholder="Modelo de procesador" class="border p-2 rounded w-full" required>
    <input type="text" name="procesador_nombre" placeholder="Nombre del procesador" class="border p-2 rounded w-full" required>
    <input type="number" step="0.01" name="vddcore" placeholder="VDDCORE (Ω)" class="border p-2 rounded w-full" required>
    <input type="number" step="0.01" name="apu_vddsoc" placeholder="APU_VDDSOC (Ω)" class="border p-2 rounded w-full" required>
    <input type="number" step="0.01" name="vddcr_soc" placeholder="VDDCR_SOC (Ω)" class="border p-2 rounded w-full" required>
    <input type="number" step="0.01" name="ram" placeholder="RAM (Ω)" class="border p-2 rounded w-full" required>
    <input type="number" step="0.01" name="vddp_alwp" placeholder="VDDP_ALWP (Ω)" class="border p-2 rounded w-full" required>
    <input type="number" step="0.01" name="valw_0_9" placeholder="0.9VALW (Ω)" class="border p-2 rounded w-full" required>
    <input type="number" step="0.01" name="valw_0_75" placeholder="0.75VALW (Ω)" class="border p-2 rounded w-full" required>
    <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Guardar AMD</button>
  </form>
</div>
</body>

</html>