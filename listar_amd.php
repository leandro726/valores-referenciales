<?php 
include 'header.php';
include 'db.php';
session_start();

if (!isset($_SESSION['usuario'])) {
    header("Location: login.php");
    exit();
}
$resultado = $con->query("SELECT * FROM mediciones_amd");
?>

<!DOCTYPE html>
<html lang="es">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar Mediciones</title>
    <script src="https://cdn.tailwindcss.com"></script>
    </head>
     <h2 class="text-2xl font-bold text-center mt-4">Lista de Mediciones AMD</h2>
    <table class="min-w-full border-collapse border border-gray-200 mt-4">
        <thead>
            <tr>
                <th class="border border-gray-300 px-4 py-2">ID</th>
                <th class="border border-gray-300 px-4 py-2">Placa Modelo</th>
                <th class="border border-gray-300 px-4 py-2">Procesador Modelo</th>
                <th class="border border-gray-300 px-4 py-2">Procesador Nombre</th>
                <th class="border border-gray-300 px-4 py-2">VDDCORE (Ω)</th>
                <th class="border border-gray-300 px-4 py-2">APU_VDDSOC (Ω)</th>
                <th class="border border-gray-300 px-4 py-2">VDDCR_SOC (Ω)</th>
                <th class="border border-gray-300 px-4 py-2">RAM (Ω)</th>
                <th class="border border-gray-300 px-4 py-2">VDDP_ALWP (Ω)</th>
                <th class="border border-gray-300 px-4 py-2">0.9VALW (Ω)</th>
                <th class="border border-gray-300 px-4 py-2">0.75VALW (Ω)</th>
                 <?php if ($_SESSION['usuario']['rol'] === 'admin'): ?>
                <th class="px-4 py-2">Acciones</th>
                <?php endif; ?>
                   </tr>
        </thead>
        <tbody>
            <?php while ($row = $resultado->fetch_assoc()): ?>
            <tr>
                <td class="border border-gray-300 px-4 py-2"><?php echo $row['id']; ?></td>
                <td class="border border-gray-300 px-4 py-2"><?php echo $row['placa_modelo']; ?></td>
                <td class="border border-gray-300 px-4 py-2"><?php echo $row['procesador_modelo']; ?></td>
                <td class="border border-gray-300 px-4 py-2"><?php echo $row['procesador_nombre']; ?></td>
                <td class="border border-gray-300 px-4 py-2"><?php echo $row['vddcore']; ?></td>
                <td class="border border-gray-300 px-4 py-2"><?php echo $row['apu_vddsoc']; ?></td>
                <td class="border border-gray-300 px-4 py-2"><?php echo $row['vddcr_soc']; ?></td>
                <td class="border border-gray-300 px-4 py-2"><?php echo $row['ram']; ?></td>
                <td class="border border-gray-300 px-4 py-2"><?php echo $row['vddp_alwp']; ?></td>
                <td class="border border-gray-300 px-4 py-2"><?php echo $row['valw_0_9']; ?></td>
                <td class="border border-gray-300 px-4 py-2"><?php echo $row['valw_0_75']; ?></td>
                 <?php if ($_SESSION['usuario']['rol'] === 'admin'): ?>
                <td class="text-center space-x-2"><a href="editar_amd.php?id=<?= $row['id'] ?>" class="bg-yellow-500 text-white px-2 py-1 rounded hover:bg-yellow-600">Editar</a>
    <a href="eliminar_amd.php?id=<?= $row['id'] ?>" onclick="return confirm('¿Estás seguro de eliminar este registro?');" class="bg-red-600 text-white px-2 py-1 rounded hover:bg-red-700">Eliminar</a>
</td><?php endif; ?>
            </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
    <div class="mt-4">
        <a href="registrar_amd.php" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Registrar nuevo valor AMD</a>
        </body>
</html>
<?php
$con->close();
?>