<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-4">
        <h2>Detail Mahasiswa</h2>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title"><?php echo $mahasiswa['nama']; ?></h5>
                <p class="card-text">
                    <strong>ID:</strong> <?php echo $mahasiswa['id']; ?><br>
                    <strong>NIM:</strong> <?php echo $mahasiswa['nim']; ?><br>
                    <strong>Jurusan:</strong> <?php echo $mahasiswa['jurusan']; ?><br>
                    <strong>Semester:</strong> <?php echo $mahasiswa['semester']; ?>
                </p>
                <a href="../../mahasiswa" class="btn btn-primary">Kembali ke Daftar</a>
            </div>
        </div>
    </div>
</body>
</html>