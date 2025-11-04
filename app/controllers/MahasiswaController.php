<?php
class MahasiswaController {
    private $model;

    public function __construct() {
        // Load dependencies
        require_once __DIR__ . '/../../config/database.php';
        require_once __DIR__ . '/../models/MahasiswaModel.php';
        
        $database = new Database();
        $db = $database->getConnection();
        $this->model = new MahasiswaModel($db);
    }

    public function index() {
        $stmt = $this->model->getAllMahasiswa();
        require_once __DIR__ . '/../views/mahasiswa/index.php';
    }

    public function tambah() {
        if($_POST) {
            $data = [
                'nama' => $_POST['nama'],
                'nim' => $_POST['nim'],
                'jurusan' => $_POST['jurusan'],
                'semester' => $_POST['semester']
            ];

            if($this->model->createMahasiswa($data)) {
                // Redirect ke halaman daftar mahasiswa
                header("Location: ?action=index");
                exit;
            }
        }
        require_once __DIR__ . '/../views/mahasiswa/tambah.php';
    }

    public function edit($id) {
        $mahasiswa = $this->model->getMahasiswaById($id);
        
        if(!$mahasiswa) {
            echo "Data tidak ditemukan!";
            return;
        }

        if($_POST) {
            $data = [
                'nama' => $_POST['nama'],
                'nim' => $_POST['nim'],
                'jurusan' => $_POST['jurusan'],
                'semester' => $_POST['semester']
            ];

            if($this->model->updateMahasiswa($id, $data)) {
                // Redirect ke halaman daftar mahasiswa
                header("Location: ?action=index");
                exit;
            }
        }
        require_once __DIR__ . '/../views/mahasiswa/edit.php';
    }

    public function detail($id) {
        $mahasiswa = $this->model->getMahasiswaById($id);
        if(!$mahasiswa) {
            echo "Data tidak ditemukan!";
            return;
        }
        require_once __DIR__ . '/../views/mahasiswa/detail.php';
    }

    public function hapus($id) {
        if($this->model->deleteMahasiswa($id)) {
            header("Location: ?action=index");
            exit;
        }
    }
}
?>