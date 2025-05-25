<?php
session_start();
include 'db.php';


if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $email = $_POST['email'];
    $clave = $_POST['password'];

    $resultado = $con->query("SELECT * FROM usuarios WHERE email='$email' ");
    $usuario = $resultado->fetch_assoc();

    if($usuario && password_verify($clave, $usuario['password'])){
        $_SESSION['usuario'] = [
            'id' => $usuario['id'],
            'nombre' => $usuario['nombre'],
            'rol' => $usuario['rol']
        ];
        header("Location: listar.php");
        exit;
    } else {
        $error = "Email o contraseña incorrectos.";
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Iniciar sesión</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center h-screen">
    <form method="POST" class="bg-white p-8 rounded shadow w-96">
        <h2 class="text-2xl font-bold mb-4 text-center">Iniciar sesión</h2>
        <?php if (isset($error)) echo "<p class='text-red-600 mb-4'>$error</p>"; ?>
        <input type="email" name="email" placeholder="Correo electrónico" required class="w-full mb-4 p-2 border rounded">
        <input type="password" name="password" placeholder="Contraseña" required class="w-full mb-4 p-2 border rounded">
        <button type="submit" class="bg-blue-600 text-white w-full py-2 rounded hover:bg-blue-700">Entrar</button>
    </form>
</body>
</html>