<?php

$host = "fdb1032.awardspace.net";
$dbname = "4736937_planifydb";
$user = "4736937_planifydb";
$pass = "V4U)fDTQ6e^bdA%Z";

try {

    $pdo = new PDO(
        "mysql:host=$host;dbname=$dbname;charset=utf8",
        $user,
        $pass
    );

    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {

    die("Error de conexión: " . $e->getMessage());

}
?>
