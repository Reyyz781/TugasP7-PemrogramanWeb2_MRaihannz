<?php
define('BASE_PATH', dirname(__DIR__));

echo "BASE_PATH: " . BASE_PATH . "<br><br>";

$paths_to_check = [
    BASE_PATH . '/config/database.php',
    BASE_PATH . '/app/controllers/MahasiswaController.php',
    BASE_PATH . '/app/models/MahasiswaModel.php',
    BASE_PATH . '/app/views/mahasiswa/index.php'
];

foreach($paths_to_check as $path) {
    if(file_exists($path)) {
        echo "✅ " . $path . " - FOUND<br>";
    } else {
        echo "❌ " . $path . " - NOT FOUND<br>";
    }
}
?>