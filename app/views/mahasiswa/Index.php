<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-4">
        <h2>Data Mahasiswa</h2>
        <a href="?action=tambah" class="btn btn-primary mb-3">Tambah Mahasiswa</a>
        
        <?php if ($stmt->rowCount() > 0): ?>
        <table class="table table-bordered table-striped">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>NIM</th>
                    <th>Nama</th>
                    <th>Jurusan</th>
                    <th>Semester</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = $stmt->fetch(PDO::FETCH_ASSOC)): ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['nim']; ?></td>
                    <td><?php echo $row['nama']; ?></td>
                    <td><?php echo $row['jurusan']; ?></td>
                    <td><?php echo $row['semester']; ?></td>
                    <td>
                        <a href="?action=detail&id=<?php echo $row['id']; ?>" class="btn btn-info btn-sm">Detail</a>
                        <a href="?action=edit&id=<?php echo $row['id']; ?>" class="btn btn-warning btn-sm">Edit</a>
                        <a href="?action=hapus&id=<?php echo $row['id']; ?>" 
                           class="btn btn-danger btn-sm" 
                           onclick="return confirm('Yakin hapus data?')">Hapus</a>
                    </td>
                </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
        <?php else: ?>
            <div class="alert alert-info">Tidak ada data mahasiswa.</div>
        <?php endif; ?>
    </div>
</body>
</html>