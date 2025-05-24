<?php
include 'config/koneksi.php';

$query = mysqli_query($config, "SELECT * FROM users ORDER BY id DESC");

// Memeriksa apakah query berhasil dan mendapatkan hasil
if ($query) {
    $row = mysqli_fetch_all($query, MYSQLI_ASSOC);
} else {
    $row = []; // Jika query gagal, inisialisasi $row sebagai array kosong
}

if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $queryDelete = mysqli_query($config, "DELETE FROM users WHERE id='$id'");
    header("location:user.php?hapus=berhasil");
    exit; // Pastikan untuk menghentikan eksekusi setelah redirect
}
?>

<div class="table-responsive">
    <div align="right" class="mb-3">
        <a href="?page=tambah-user" class="btn btn-primary">Tambah</a>
    </div>
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Email</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php if (!empty($row)): // Memeriksa apakah $row tidak kosong 
            ?>
                <?php foreach ($row as $key => $data): ?>
                    <tr>
                        <td><?= $key + 1 ?></td>
                        <td><?= htmlspecialchars($data['name']) ?></td>
                        <td><?= htmlspecialchars($data['email']) ?></td>
                        <td>
                            <a href="tambah-user.php?edit=<?php echo $data['id'] ?>" class="btn btn-success btn-sm">Edit</a>
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