<?php
class MahasiswaModel {
    private $conn;
    private $table_name = "mahasiswa";

    public function __construct($db) {
        $this->conn = $db;
    }

    public function getAllMahasiswa() {
        $query = "SELECT * FROM " . $this->table_name . " ORDER BY id DESC";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt;
    }

    public function getMahasiswaById($id) {
        $query = "SELECT * FROM " . $this->table_name . " WHERE id = ? LIMIT 0,1";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(1, $id);
        $stmt->execute();
        
        if($stmt->rowCount() > 0) {
            return $stmt->fetch(PDO::FETCH_ASSOC);
        }
        return false;
    }

    public function createMahasiswa($data) {
        $query = "INSERT INTO " . $this->table_name . " 
                  SET nama=:nama, nim=:nim, jurusan=:jurusan, semester=:semester";
        
        $stmt = $this->conn->prepare($query);
        
        $stmt->bindParam(":nama", $data['nama']);
        $stmt->bindParam(":nim", $data['nim']);
        $stmt->bindParam(":jurusan", $data['jurusan']);
        $stmt->bindParam(":semester", $data['semester']);
        
        return $stmt->execute();
    }

    public function updateMahasiswa($id, $data) {
        $query = "UPDATE " . $this->table_name . " 
                  SET nama=:nama, nim=:nim, jurusan=:jurusan, semester=:semester 
                  WHERE id=:id";
        
        $stmt = $this->conn->prepare($query);
        
        $stmt->bindParam(":nama", $data['nama']);
        $stmt->bindParam(":nim", $data['nim']);
        $stmt->bindParam(":jurusan", $data['jurusan']);
        $stmt->bindParam(":semester", $data['semester']);
        $stmt->bindParam(":id", $id);
        
        return $stmt->execute();
    }

    public function deleteMahasiswa($id) {
        $query = "DELETE FROM " . $this->table_name . " WHERE id = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(1, $id);
        return $stmt->execute();
    }
}
?>