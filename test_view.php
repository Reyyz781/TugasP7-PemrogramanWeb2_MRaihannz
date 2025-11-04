<?php
// Test koneksi dan view
require_once 'config/database.php';

$database = new Database();
$db = $database->getConnection();

// Test query
$stmt = $db->query("SELECT * FROM mahasiswa LIMIT 1");
$data = $stmt->fetch(PDO::FETCH_ASSOC);

echo "<h2>Test Data from Database:</h2>";
echo "<pre>";
print_r($data);
echo "</pre>";

echo "<h2>Test Text Display:</h2>";
echo "Tambah Edit Hapus Detail - Should display correctly";
?>