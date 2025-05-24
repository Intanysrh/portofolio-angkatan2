<?php
if (isset($_POST['simpan'])) {
    $title = $_POST['title'];
    $description = $_POST['description'];
    $skills = $_POST['skills'];
    $desc_skills = $_POST['desc_skills'];
    $photo = $_FILES['photo']['name'];
    $status = $_POST['status'];

    $ekstensi = ['png', 'jpg', 'jpeg'];

    $queryProfile = mysqli_query($$config, "SELECT * FROM profiles ORDER BY id DESC");
    if (mysqli_num_rows($queryProfile) > 0) {
        $rowProfile = mysqli_fetch_assoc($queryProfile);
        $id = $rowProfile['id'];

        // perintah update

        $update = mysqli_query($config, "UPDATE profiles SET profile_name='$profile_name', description='$description' WHERE id = '$id'");
        header("location:?page=manage-profile&ubah=berhasil");
    } else {
        if (!empty($photo)) {
            // jika user upload gambar
            $photo = "profile_" . time() . "_" . $photo;
        } else {
            //  jika user tidak mengupload gambar
            $insertQ = mysqli_query($config, "INSERT INTO profiles (profile_name, description)"
                . "VALUES ('$profile_name', '$description')");
            header("location:?page=manage-profile&tambah=berhasil");
        }
    }

    $ext = pathinfo($photo, PATHINFO_EXTENSION);
    if (!in_array($ext, $ekstensi)) {
        $error[] = "Mohon maaf, ekstensi file tidak ditemukan";
    } else {
        $query = mysqli_query($config, "INSERT INTO users (name, profesion, photo, status) VALUES ('$name','$email','$password')");
        if ($query) {
            header(("location:user.php?tambah=berhasil"));
        }
    }
}

$header = isset($_GET['edit']) ? "Edit" : "Tambah";
$id_user = isset($_GET['edit']) ? $_GET['edit'] : '';
$queryEdit = mysqli_query($config, "SELECT * FROM users WHERE id='$id_user'");
$rowEdit = mysqli_fetch_assoc($queryEdit);

if (isset($_POST['edit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = sha1($_POST['password']);

    $queryUpdate = mysqli_query($config, "UPDATE users SET name='$name', email='$email', password='$password' WHERE id='$id_user'");
    if ($queryUpdate) {
        header("location:user.php?ubah=berhasil");
    }
}

?>
<div class="card-body">
    <form action="" method="post">
        <div class="mb-3 row">
            <div class="col-sm-2">
                <label for="">Title</label>
            </div>
            <div class="col-sm-10">
                <input required name="title" type="text" class="form-control" placeholder="Masukan Judul Anda" value="<?= isset($rowEdit['title']) ? $rowEdit['title'] : '' ?>">
            </div>
        </div>
        <div class="mb-3 row">
            <div class="col-sm-2">
                <label for="">Description</label>
            </div>
            <div class="col-sm-10">
                <input required name="description" type="text" class="form-control" placeholder="Masukan Deskripsi Anda" value="<?= isset($rowEdit['description']) ? $rowEdit['description'] : '' ?>">
            </div>
        </div>
        <div class="mb-3 row">
            <div class="col-sm-2">
                <label for="">Photo</label>
            </div>
            <div class="col-sm-10">
                <input required name="photo" type="file">
            </div>
        </div>
        <div class="mb-3 row">
            <div class="col-sm-2">
                <label for="">Status</label>
            </div>
            <div class="col-sm-10">
                <input type="radio" name="status" value="1" checked> Publish
                <input type="radio" name="status" value="0"> Draft
            </div>
        </div>
        <div class="mb-3 row">
            <div class="col-sm-2">
                <button name="<?php echo isset($_GET['edit']) ? 'edit' : 'simpan'; ?>" type="submit" class="btn btn-primary btn-sm">Simpan</button>
            </div>
        </div>
    </form>
</div>