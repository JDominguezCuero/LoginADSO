<?php
session_start();
require_once __DIR__ . '/../../config/config.php';

$id_usuario = $_SESSION['usuario']['id_usuario'] ?? null;

if ($id_usuario) {
    // Por ahora solo se simula, pero puedes añadir un campo como "leído" si es necesario
    echo json_encode(['status' => 'ok']);
}
?>
