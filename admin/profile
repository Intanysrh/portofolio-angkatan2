<?php
include 'config/koneksi.php';

// Menangani penghapusan profil
if (isset($_GET['delete'])) {
    $id = intval($_GET['delete']);
    $queryDelete = mysqli_query($config, "DELETE FROM profiles WHERE id='$id'");
    header("Location: ?page=manage-profile&hapus=berhasil");
    exit; // Pastikan untuk menghentikan eksekusi setelah redirect
}

// Menangani penambahan atau pengeditan profil
if (isset($_POST['simpan'])) {
    $profile_name = $_POST['profile_name'];
    $profesion = $_POST['profesion'];
    $description = $_POST['description'];
    $photo = $_FILES['photo'];

    // Jika ada ID, berarti kita mengedit
    if (isset($_POST['id']) && !empty($_POST['id'])) {
        $id = intval($_POST['id']);
        $updateQuery = "UPDATE profiles SET profile_name='$profile_name', profesion='$profesion', description='$description'";

        if (!empty($photo['name'])) {
            $photoName = "profile_" . time() . "_" . basename($photo['name']);
            move_uploaded_file($photo['tmp_name'], "uploads/" . $photoName);
            $updateQuery .= ", photo='$photoName'";
        }
        $updateQuery .= " WHERE id='$id'";
        mysqli_query($config, $updateQuery);
    } else {
        // Jika tidak ada ID, berarti kita menambah profil baru
        $photoName = !empty($photo['name']) ? "profile_" . time() . "_" . basename($photo['name']) : null;
        if ($photoName) {
            move_uploaded_file($photo['tmp_name'], "uploads/" . $photoName);
            $insertQuery = "INSERT INTO profiles (profile_name, profesion, description, photo) VALUES ('$profile_name', '$profesion', '$description', '$photoName')";
        } else {
            $insertQuery = "INSERT INTO profiles (profile_name, profesion, description) VALUES ('$profile_name', '$profesion', '$description')";
        }
        mysqli_query($config, $insertQuery);
    }
    header("Location: ?page=manage-profile&tambah=berhasil");
    exit;
}

// Mengambil data profil untuk ditampilkan
$query = mysqli_query($config, "SELECT * FROM profiles ORDER BY id DESC");
$row = mysqli_fetch_all($query, MYSQLI_ASSOC);
?>

<div class="table-responsive">
    <div align="right" class="mb-3">
        <a href="?page=tambah-profile" class="btn btn-primary">Tambah</a>
    </div>
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>No</th>
                <th>Profile Name</th>
                <th>Profesion</th>
                <th>Description</th>
                <th>Photo</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php if (!empty($row)): ?>
                <?php foreach ($row as $key => $data): ?>
                    <tr>
                        <td><?= $key + 1 ?></td>
                        <td><?= htmlspecialchars($data['profile_name']) ?></td>
                        <td><?= htmlspecialchars($data['profesion']) ?></td>
                        <td><?= htmlspecialchars($data['description']) ?></td>
                        <td>
                            <?php if (!empty($data['photo'])): ?>
                                <img src="uploads/<?= htmlspecialchars($data['photo']) ?>" width="50" alt="">
                            <?php endif; ?>
                        </td>
                        <td>
                            <a href="?page=tambah-profile&edit=<?= $data['id'] ?>" class="btn btn-success btn-sm">Edit</a>
                            <a onclick="return confirm('Are you sure?')" href="?page=manage-profile&delete=<?= $data['id'] ?>" class="btn btn-warning btn-sm">Delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="6" class="text-center">Tidak ada data profil.</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
</div>