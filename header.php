
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Valores Referenciales</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-900">
  <nav class="bg-white shadow mb-6">
    <div class="max-w-6xl mx-auto px-4">
      <div class="flex justify-between">
        <div class="flex space-x-4">
          <a href="home.php" class="py-4 px-2 text-blue-600 font-bold hover:underline">Inicio</a>
          <?php if (isset($_SESSION['usuario']) && $_SESSION['usuario']['rol'] === 'admin'): ?>
            <a href="registrar_intel.php" class="py-4 px-2 hover:text-blue-500">Registrar Intel</a>
            <a href="registrar_amd.php" class="py-4 px-2 hover:text-blue-500">Registrar AMD</a>
          <?php endif; ?>
          <a href="listar_intel.php" class="py-4 px-2 hover:text-blue-500">Ver Intel</a>
          <a href="listar_amd.php" class="py-4 px-2 hover:text-blue-500">Ver AMD</a>
        </div>
        <div class="flex items-center space-x-2">
          <?php if (isset($_SESSION['usuario'])): ?>
            <span class="text-gray-600">Hola, <?= htmlspecialchars($_SESSION['usuario']['nombre']) ?></span>
            <a href="logout.php" class="py-2 px-3 bg-red-500 text-white rounded hover:bg-red-600">Cerrar sesión</a>
          <?php else: ?>
            <a href="login.php" class="py-2 px-3 bg-blue-600 text-white rounded hover:bg-blue-700">Iniciar sesión</a>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </nav>
