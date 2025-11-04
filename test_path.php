
<?php
echo "Current directory: " . __DIR__ . "<br>";

$paths_to_check = [
    '../config/database.php',
    '../app/controllers/MahasiswaController.php', 
    '../app/models/MahasiswaModel.php'
];

foreach($paths_to_check as $path) {
    if(file_exists($path)) {
        echo "✅ $path - FOUND<br>";
    } else {
        echo "❌ $path - NOT FOUND<br>";
    }
}
?>