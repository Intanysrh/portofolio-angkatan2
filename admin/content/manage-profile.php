<?php
include "config/koneksi.php";

if (isset($_POST['simpan'])) {
    $profile_name = $_POST['profile_name'];
    $profesion = $_POST['profesion'];
    $description = $_POST['description'];
    // simpan foto:
    $photo = $_FILES['photo']['name'];
    $tmp_name = $_FILES['photo']['tmp_name'];
    $fileName = uniqid() . "_" . basename($photo);
    $filePath = "uploads/" . $fileName;

    // mencari apakah ada data di dalam table profile
    $queryProfile = mysqli_query($config, "SELECT * FROM profiles ORDER BY id DESC LIMIT 1");
    if (mysqli_num_rows($queryProfile) > 0) {
        $rowProfile = mysqli_fetch_assoc($queryProfile);
        $id = $rowProfile['id'];

        // Jika user upload gambar:
        if (!empty($photo)) {
            unlink("admin/uploads/" . $rowProfile['photo']);

            // Memindahkan file yang diupload
            if (move_uploaded_file($tmp_name, $filePath)) {
                // Update query
                $update = mysqli_query($config, "UPDATE profiles SET profile_name='$profile_name', profesion='$profesion', description='$description', photo='$fileName' WHERE id='$id'");
            } else {
                echo "Gagal mengupload foto.";
            }
        } else {
            // Update tanpa mengubah foto
            $update = mysqli_query($config, "UPDATE profiles SET profile_name='$profile_name', profesion='$profesion', description='$description' WHERE id='$id'");
        }
        header("Location: ?page=manage-profile&ubah=berhasil");
        exit; // Hentikan eksekusi setelah redirect
    } else {
        // Jika tidak ada data, lakukan insert
        if (!empty($photo)) {
            // Memindahkan file yang diupload
            if (move_uploaded_file($tmp_name, $filePath)) {
                $insertQ = mysqli_query($config, "INSERT INTO profiles (profile_name, profesion, description, photo) VALUES ('$profile_name', '$profesion', '$description', '$fileName')");
            } else {
                echo "Gagal mengupload foto.";
            }
        } else {
            // Insert tanpa foto
            $insertQ = mysqli_query($config, "INSERT INTO profiles (profile_name, profesion, description) VALUES ('$profile_name', '$profesion', '$description')");
        }
        header("Location: ?page=manage-profile&tambah=berhasil");
        exit; // Hentikan eksekusi setelah redirect
    }
}

// Mengambil data profil untuk ditampilkan
$selectProfile = mysqli_query($config, "SELECT * FROM profiles");
$row = mysqli_fetch_assoc($selectProfile);
?>

<form action="" method="post" enctype="multipart/form-data">
    <div class="m2" style="width: 55%;">
        <div class="mb-3"></div>
        <label for="" class="form-label">Profile Name</label>
        <input type="text" value="<?php echo isset($row['profile_name']) ? ($row['profile_name']) : ''; ?>" class="form-control" name="profile_name" required>

        <label for="" class="form-label">Profesion</label>
        <input type="text" value="<?php echo isset($row['profesion']) ? ($row['profesion']) : ''; ?>" class="form-control" name="profesion" required>

        <label for="" class="form-label">Description</label>
        <textarea class="form-control" id="summernote" name="description" cols="30" rows="5" required><?php echo isset($row['description']) ? ($row['description']) : ''; ?></textarea>

        <label class="form-label">Photo</label>
        <input type="file" class="form-control" name="photo">
        <?php if (!empty($row['photo'])): ?>
            <img src="admin/uploads/<?php echo ($row['photo']); ?>" width="150" alt=""><br>
        <?php endif; ?>
        <button type="submit" name="simpan" class="btn btn-primary mt-2">Simpan</button>
    </div>
</form>
</body>

</html>