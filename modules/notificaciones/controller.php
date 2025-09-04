<?php
session_start();
require_once(__DIR__ . '/model.php');
require_once __DIR__ . '/../../config/config.php';

if (!isset($_SESSION['usuario'])) {
    header("Location: ../../public/index_controller.php?login=error&reason=nologin");
    exit;
}

$accion = $_GET['accion'] ?? 'listar';
$mensjError = "";



?>