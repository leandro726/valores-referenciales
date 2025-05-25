<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    header("Location: login.php");
    exit;
}


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
    <div class="max-w-xl mx-auto bg-white p-8 rounded-xl shadow">
        <h2 class="text-2xl font-bold mb-6 text-center">Registrar valores de referencia</h2>
        <form action="guardar.php" method="POST" class="space-y-4">
            <div>
                <label class="block mb-1 font-semibold">Modelo de Placa:</label>
                <input type="text" name="placa_modelo" required class="w-full border p-2 rounded">
            </div>

            <div>
                <label class="block mb-1 font-semibold">Modelo de Procesador:</label>
                <input type="text" name="procesador_modelo" required class="w-full border p-2 rounded">
            </div>

            <div>
                <label class="block mb-1 font-semibold">Nombre del Procesador:</label>
                <input type="text" name="procesador_nombre" required class="w-full border p-2 rounded">
            </div>

            <div class="grid grid-cols-2 gap-4">
                <div>
                    <label class="block mb-1">CPU Core (Ω):</label>
                    <input type="number" step="0.01" name="cpu_core" required class="w-full border p-2 rounded">
                </div>
                <div>
                    <label class="block mb-1">VCCSA (Ω):</label>
                    <input type="number" step="0.01" name="vccsa" required class="w-full border p-2 rounded">
                </div>
                <div>
                    <label class="block mb-1">VCCGT (Ω):</label>
                    <input type="number" step="0.01" name="vccgt" required class="w-full border p-2 rounded">
                </div>
                <div>
                    <label class="block mb-1">PCH (Ω):</label>
                    <input type="number" step="0.01" name="pch" required class="w-full border p-2 rounded">
                </div>
                <div>
                    <label class="block mb-1">RAM (Ω):</label>
                    <input type="number" step="0.01" name="ram" required class="w-full border p-2 rounded">
                </div>
            </div>

            <button type="submit" class="bg-blue-600 text-white py-2 px-4 rounded hover:bg-blue-700 w-full mt-4">
                Guardar
            </button>
        </form>

        <div class="text-center mt-6">
            <a href="listar.php" class="text-blue-600 hover:underline">Ver registros</a>
        </div>
    </div>
</body>

</html>
