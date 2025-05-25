<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    header("Location: login.php");
    exit;
}

include 'db.php';
$id = $_GET['id'];
$resultado = $con->query("SELECT * FROM mediciones WHERE id = $id");
$dato = $resultado->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar Registro</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 font-sans p-6">
<div class="max-w-xl mx-auto bg-white p-8 rounded-xl shadow">
    <h2 class="text-2xl font-bold mb-6 text-center">Editar Registro</h2>
    <form action="actualizar.php" method="POST" class="space-y-4">
    
        <input type="hidden" name="id" value="<?= $dato['id'] ?>">
        <div>
        <label class="block mb-1 font-semibold">Modelo de Placa:</label>
        <input type="text" name="placa_modelo" value="<?= $dato['placa_modelo'] ?>" required class="w-full border p-2 rounded" placeholder="Modelo de placa">
        </div>
        <div><label class="block mb-1 font-semibold">Modelo de Procesador:</label>
        <input type="text" name="procesador_modelo" value="<?= $dato['procesador_modelo'] ?>" required class="w-full border p-2 rounded" placeholder="Modelo de procesador">
        </div>
        <div>
                <label class="block mb-1 font-semibold">Nombre del Procesador:</label>
        <input type="text" name="procesador_nombre" value="<?= $dato['procesador_nombre'] ?>" required class="w-full border p-2 rounded" placeholder="Nombre de procesador">
        </div>
        <div class="grid grid-cols-2 gap-4">
            <div>
            <label class="block mb-1">CPU Core (Ω):</label>
            <input type="number" step="0.01" name="cpu_core" value="<?= $dato['cpu_core'] ?>" required class="w-full border p-2 rounded" placeholder="CPU Core">
            </div>
            <div>
           <label class="block mb-1">VCCSA (Ω):</label>
            <input type="number" step="0.01" name="vccsa" value="<?= $dato['vccsa'] ?>" required class="w-full border p-2 rounded" placeholder="VCCSA">
            </div>
            <div>
            <label class="block mb-1">VCCGT (Ω):</label>
            <input type="number" step="0.01" name="vccgt" value="<?= $dato['vccgt'] ?>" required class="w-full border p-2 rounded" placeholder="VCCGT">
            </div>
            <div>
            <label class="block mb-1">PCH (Ω):</label>
            <input type="number" step="0.01" name="pch" value="<?= $dato['pch'] ?>" required class="w-full border p-2 rounded" placeholder="PCH">
            </div>
            <div>
            <label class="block mb-1">RAM (Ω):</label>
            <input type="number" step="0.01" name="ram" value="<?= $dato['ram'] ?>" required class="w-full border p-2 rounded" placeholder="RAM">
            </div>
        </div>

        <button type="submit" class="bg-blue-600 text-white py-2 px-4 rounded hover:bg-blue-700 w-full">
            Actualizar
        </button>
    </form>
</div>
</body>
</html>