<?php

session_start();

require_once __DIR__ . '/../includes/config.php';

$usuario = $_POST['usuario'];
$password = $_POST['password'];

$sql = "SELECT * FROM usuarios WHERE usuario = ?";

$stmt = $pdo->prepare($sql);
$stmt->execute([$usuario]);

$user = $stmt->fetch();

if ($user && password_verify($password, $user['password'])) {

    $_SESSION['id'] = $user['id'];
    $_SESSION['usuario'] = $user['usuario'];
    $_SESSION['rol'] = $user['rol'];

    // Redirección según rol
    if ($user['rol'] == 'admin') {

        header("Location: ../admin/dashboard.php");

    } else {

        echo "
        <script>

        alert('👋 Sesión iniciada correctamente!');

        window.location.href='../dashboard.php';

        </script>
        ";
    }

    exit();

} else {

    echo "
    <script>

    alert('Usuario o contraseña incorrectos...');

    window.location.href='../dashboard.php';

    </script>
    ";
}
