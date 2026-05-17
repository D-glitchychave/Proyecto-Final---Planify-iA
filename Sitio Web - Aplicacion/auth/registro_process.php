<?php

require_once '../includes/config.php';

$nombre = trim($_POST['nombre']);
$usuario = trim($_POST['usuario']);
$correo = trim($_POST['correo']);
$password = trim($_POST['password']);

$passwordHash = password_hash($password, PASSWORD_DEFAULT);

$verificar = $pdo->prepare("
SELECT id
FROM usuarios
WHERE usuario = :usuario
OR correo = :correo
");

$verificar->execute([
    ':usuario' => $usuario,
    ':correo' => $correo
]);

if ($verificar->rowCount() > 0) {

    die("El usuario o correo ya existen...");

}

$sql = "INSERT INTO usuarios
(nombre, usuario, correo, password)
VALUES
(:nombre, :usuario, :correo, :password)";

$stmt = $pdo->prepare($sql);

$stmt->execute([
    ':nombre' => $nombre,
    ':usuario' => $usuario,
    ':correo' => $correo,
    ':password' => $passwordHash
]);

echo "
<script>

alert('✅ Cuenta creada correctamente!');

window.location.href='../login.php';

</script>
";

?>
