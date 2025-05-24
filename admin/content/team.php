<?php
include 'config/koneksi.php';
if (isset($_POST['simpan'])) {
    $title = $_POST['title'];
    $description = $_POST['description'];
    $skills = $_POST['skills'];
    $desc_skills = $_POST['desc_skills'];
    $photo = $_FILES['photo']['name'];
    $status = $_POST['status'];
}


$query = mysqli_query($config, "SELECT * FROM team ORDER BY id DESC");

// Memeriksa apakah query berhasil dan mendapatkan hasil
if ($query) {
    $row = mysqli_fetch_all($query, MYSQLI_ASSOC);
} else {
    $row = []; // Jika query gagal, inisialisasi $row sebagai array kosong
}

if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $queryDelete = mysqli_query($config, "DELETE FROM users WHERE id='$id'");
    header("location: ?page=team&hapus=berhasil");
    exit; // Pastikan untuk menghentikan eksekusi setelah redirect
}
?>

<div class="table-responsive">
    <div align="right" class="mb-3">
        <a href="?page=tambah-team" class="btn btn-primary">Tambah</a>
    </div>
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>No</th>
                <th>Tittle</th>
                <th>Description</th>
                <th>Photo</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php if (!empty($row)): // Memeriksa apakah $row tidak kosong 
            ?>
                <?php foreach ($row as $key => $data): ?>
                    <tr>
                        <td><?= $key + 1 ?></td>
                        <td><?= htmlspecialchars($data['title']) ?></td>
                        <td><?= htmlspecialchars($data['description']) ?></td>
                        <td><?= htmlspecialchars($data['photo']) ?></td>
                        <td>
                            <a href="?page=edit-team&edit=<?php echo $data['id'] ?>" class="btn btn-success btn-sm">Edit</a>
                            <a onclick="return confirm('Are you sure?')"
                                href="user.php?delete=<?php echo $data['id'] ?>" class="btn btn-warning btn-sm">Delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="4" class="text-center">Tidak ada data pengguna.</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
</div>