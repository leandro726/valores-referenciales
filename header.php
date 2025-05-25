
<?php

$usuario = $_SESSION['usuario'];
?>
<!-- Barra de navegación -->

<nav class="bg-gray-800 text-white px-4 py-3 flex justify-between items-center">
  <div class="text-lg font-semibold">Valores Referenciales</div>
  <div class="flex items-center space-x-4">
    <span class="text-sm">👤 <?= htmlspecialchars($usuario['nombre']) ?> (<?= $usuario['rol'] ?>)</span>
    <a href="logout.php" class="bg-red-600 hover:bg-red-700 text-white px-3 py-1 rounded text-sm">
      Cerrar sesión
    </a>
  </div>
</nav>