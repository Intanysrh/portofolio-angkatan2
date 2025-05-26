<?php
include 'config/koneksi.php';

$query = mysqli_query($config, "SELECT * FROM contact ORDER BY id DESC");
if ($query) {
    $row = mysqli_fetch_all($query, MYSQLI_ASSOC);
} else {
    $row = []; // Jika query gagal, inisialisasi $row sebagai array kosong
}

if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $queryDelete = mysqli_query($config, "DELETE FROM contact WHERE id='$id'");
    header("location:user.php?hapus=berhasil");
    exit; // Pastikan untuk menghentikan eksekusi setelah redirect
}
?>

<div class="table-responsive">
    <table class="table table-bordered table-striped" id="table">
        <thead>
            <tr>
                <th>No.</th>
                <th>Name</th>
                <th>Email</th>
                <th>Subject</th>
                <th>Message</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php if (!empty($row)): // Memeriksa apakah $row tidak kosong 
            ?>
                <?php $i = 1;
                foreach ($row as $key => $data): ?>
                    <tr>
                        <td><?= $key + 1 ?></td>
                        <td><?= ($data['your_name']) ?></td>
                        <td><?= ($data['your_email']) ?></td>
                        <td><?= ($data['subject']) ?></td>
                        <td><?= ($data['message']) ?></td>
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