<?php
echo "<h3>Checking File Structure:</h3>";

$files = [
    __DIR__ . '/config/database.php',
    __DIR__ . '/app/models/MahasiswaModel.php',
    __DIR__ . '/app/controllers/MahasiswaController.php',
    __DIR__ . '/app/views/mahasiswa/index.php'
];

foreach($files as $file) {
    if(file_exists($file)) {
        echo "✅ " . $file . "<br>";
    } else {
        echo "❌ " . $file . "<br>";
    }
}

echo "<h3>Current Directory: " . __DIR__ . "</h3>";
?>