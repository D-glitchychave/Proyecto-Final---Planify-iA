<?php
$host = "fdb1032.awardspace.net";
$dbname = "4736937_kinder";
$user = "4736937_kinder";
$pass = "ClaveKinder_0102";

try {
    $conexion = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $user, $pass);
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    die("Error de conexión: " . $e->getMessage());
}
?>