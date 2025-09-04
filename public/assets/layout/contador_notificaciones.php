<?php
session_start();
require_once __DIR__ . '/../../config/config.php';

$id_usuario = $_SESSION['usuario']['id_usuario'] ?? null;

if ($id_usuario) {
    $stmt = $conexion->prepare("SELECT COUNT(*) AS cantidad FROM logsactividades WHERE id_usuario = ?");
    $stmt->execute([$id_usuario]);
    $row = $stmt->fetch();
    echo $row['cantidad'];
} else {
    echo 0;
}
?>
