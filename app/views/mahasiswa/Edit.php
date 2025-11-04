<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-4">
        <h2>Edit Mahasiswa</h2>
        
        <form method="POST">
            <div class="mb-3">
                <label class="form-label">NIM</label>
                <input type="text" class="form-control" name="nim" 
                       value="<?php echo $mahasiswa['nim']; ?>" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Nama</label>
                <input type="text" class="form-control" name="nama" 
                       value="<?php echo $mahasiswa['nama']; ?>" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Jurusan</label>
                <input type="text" class="form-control" name="jurusan" 
                       value="<?php echo $mahasiswa['jurusan']; ?>" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Semester</label>
                <input type="number" class="form-control" name="semester" 
                       value="<?php echo $mahasiswa['semester']; ?>" required>
            </div>
            <button type="submit" class="btn btn-warning">Update Data</button>
            <a href="?action=index" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
</body>
</html>