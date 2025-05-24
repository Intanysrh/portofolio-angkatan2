<?php
include "config/koneksi.php";

if (isset($_POST['simpan'])) {
    $profile_name = $_POST['profile_name'];
    $profesion = $_POST['profesion'];
    $description = $_POST['description'];
    // simpan foto:
    $photo = $_FILES['photo']['name'];

    // mencari apakah ada data nya  di dalam table profile, jika ada maka update, jika tidak ada maka insert mysqli_num_row()
    $queryProfile = mysqli_query($config, "SELECT * FROM profiles ORDER BY id DESC");
    if (mysqli_num_rows($queryProfile) > 0) {
        $rowProfile = mysqli_fetch_assoc($queryProfile);
        $id = $rowProfile['id'];
        // perintah update
        $update = mysqli_query($config, "UPDATE profiles SET profile_name='$profile_name', profesion='$profesion', description='$description' WHERE id='$id'");
        header("location:?page=manage-profile&ubah=berhasil");
    } else {
        // perintah insert
        if (!empty($photo)) {
            // jika user upload gambar
            $photo = "profile_" . time() . "_" . $photo;
        } else {
            //  jika user tidak mengupload gambar
            $insertQ = mysqli_query($config, "INSERT INTO profiles (profile_name, profesion,  description) VALUES ('$profile_name', '$profesion', '$description')");
            header("location:?page=manage-profile&tambah=berhasil");
        }
    }


    // if ($photo['error'] == 0) {
    //     $fileName = uniqid() . "_" . basename($photo['name']);
    //     $filePath = "uploads/" . $fileName;
    //     move_uploaded_file($photo['tmp_name'], $filePath);
    //     // $insertQ = mysqli_query($config, "INSERT INTO `profiles` (`profile_name`, `profesion`, `description`) VALUES ('$profile_name', '$profesion', '$description')");
    // }
    // $insertQ = mysqli_query($config, "INSERT INTO `profiles`(`profile_name`, `profesion`, `description`, `photo`) VALUES ('$profile_name', '$profesion', '$description', '$fileName')");
    // if ($insertQ) {
    //     header("location:dashboard.php?level=" . base64_encode($_SESSION['level']) . "&page=manage-profile");
    // }
}

$selectProfile = mysqli_query($config, "SELECT * FROM profiles");
$row = mysqli_fetch_assoc($selectProfile);

// if (isset($_GET['del'])) {
//     $idDel = $_GET['del'];
//     $selectPhoto = mysqli_query($config, "SELECT photo FROM profiles WHERE id = $idDel");
//     $rowPhoto = mysqli_fetch_assoc($selectPhoto);
//     unlink("uploads/" . $row['photo']);
//     $delete = mysqli_query($config, "DELETE FROM profiles WHERE id = $idDel");
//     if ($delete) {
//         header("location:dashboard.php?level=" . base64_encode($_SESSION['level']) . "&page=manage-profile");
//     }
//     // if ($rowPhoto && !empty($rowPhoto['photo'])) {
//     //     $photoPath = "uploads/" . $rowPhoto['photo'];
//     //     if (file_exists($photoPath)) {
//     //         unlink($photoPath);
//     //     } else {
//     //         echo "File tidak ditemukan: " . $photoPath;
//     //     }
//     // }
//     // $delete = mysqli_query($config, "DELETE FROM `profiles` WHERE id = $idDel");
//     // if ($delete) {
//     //     // Berhasil menghapus
//     // } else {
//     //     // Gagal menghapus, bisa menampilkan pesan kesalahan
//     //     echo "Error: " . mysqli_error($config);
//     // }
// }

?>
<form action="" method="post" enctype="multipart/form-data">
    <div class="m2" style="width: 55%;">
        <div class="mb-3">

        </div>
        <label for="" class="form-label">Profile Name</label>
        <input type="text" value="<?php echo !isset($row['profile_name']) ? '' : $row['profile_name']; ?>" class="form-control" name="profile_name">

        <label for="" class="form-label">Profesion</label>
        <input type="text" value="<?php echo !isset($row['profesion']) ? '' : $row['profesion']; ?>" class="form-control" name="profesion">

        <label for="" class="form-label">Description</label>
        <textarea class="form-control" name="description" cols="30" rows="5"><?php echo !isset($row['description']) ? "" : $row['description'] ?></textarea>

        <label class="form-label">Photo</label>
        <input type="file" class="form-control" name="photo">
        <img src="uploads/<?php echo $row['photo'] ?>" width="150" alt=""><br>
        <button type="submit" name="simpan" class="btn btn-primary mt-2">Simpan</button>
        <!-- <?php if (empty($row['profile_name'])) {
                ?> -->
        <!-- <?php
                } else {
                ?>
            <a onclick="return confirm('YAKIN INGIN HAPUS?')" href="dashboard.php?level=<?php base64_encode($_SESSION['level']) ?>&page=manage-profile&del=<?= $row['id'] ?>" class="btn btn-danger mt-2">Delete</a>
        <?php
                } ?> -->
    </div>
</form>
</body>

</html>