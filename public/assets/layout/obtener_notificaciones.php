<?php
session_start();
require_once __DIR__ . '/../../config/config.php';

$id_usuario = $_SESSION['usuario']['id_usuario'] ?? null;

if ($id_usuario) {
    $stmt = $conexion->prepare("SELECT actividad, fecha FROM logsactividades WHERE id_usuario = ? ORDER BY fecha DESC LIMIT 5");
    $stmt->execute([$id_usuario]);
    $notificaciones = $stmt->fetchAll();

    echo json_encode($notificaciones);
} else {
    echo json_encode([]);
}
?>
