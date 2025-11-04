<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Manual include
$base_dir = __DIR__ . '/../';
require_once $base_dir . 'config/database.php';
require_once $base_dir . 'app/models/MahasiswaModel.php';
require_once $base_dir . 'app/controllers/MahasiswaController.php';

// Simple routing dengan query parameters
$action = $_GET['action'] ?? 'index';
$id = $_GET['id'] ?? 0;

$controller = new MahasiswaController();

switch($action) {
    case 'index':
        $controller->index();
        break;
    case 'tambah':
        $controller->tambah();
        break;
    case 'edit':
        $controller->edit($id);
        break;
    case 'detail':
        $controller->detail($id);
        break;
    case 'hapus':
        $controller->hapus($id);
        break;
    default:
        $controller->index();
        break;
}
?>