<?php 
include 'db.php';
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
           
        <title>Valores Referenciales</title>
</head>
    <body>
        <h2> Registrar Valores Referenciales</h2>
        <from action="registrar.php" method="POST">
            <label >Modelo de la placa:</label>
            <input type="text" name="placa_modelo"  required>
            <br>

            <label > Modelo del procesador:</label>
            <input type="text" name="procesador_modelo" required><br>

            <label> Nombre del procesador:</label>
            <input type="text" name="procesador_nombre" required><br>
            
            <label>CPU Core (Ω):</label>
            <input type="number" step="0.01" name="cpu_core" required><br>
            
            <label>VCCSA (Ω):</label>
            <input type="number" step="0.01" name="vccsa" required><br>

            <label>VCCGT (Ω):</label>
            <input type="number" step="0.01" name="vccgt" required><br>

            <label>PCH (Ω):</label>
            <input type="number" step="0.01" name="pch" required><br>

            <label>RAM (Ω):</label>
            <input type="number" step="0.01" name="ram" required><br>

            <button type="submit">Guardar</button>
        </form>
            <br>
    <a href="listar.php">Ver registros</a>
</body>
</html>
