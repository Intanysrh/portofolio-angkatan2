<?php
if (isset($_POST['simpan'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = sha1($_POST['password']);

    $query = mysqli_query($config, "INSERT INTO users (name, email, password) VALUES ('$name','$email','$password')");
    if ($query) {
        header(("location:user.php?tambah=berhasil"));
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
                <label for="">Nama *</label>
            </div>
            <div class="col-sm-10">
                <input required name="name" type="text" class="form-control" placeholder="Masukan Nama Anda" value="<?= isset($rowEdit['name']) ? $rowEdit['name'] : '' ?>">
            </div>
        </div>
        <div class="mb-3 row">
            <div class="col-sm-2">
                <label for="">Email *</label>
            </div>
            <div class="col-sm-10">
                <input required name="email" type="text" class="form-control" placeholder="Masukan Email Anda" value="<?= isset($rowEdit['email']) ? $rowEdit['email'] : '' ?>">
            </div>
        </div>
        <div class="mb-3 row">
            <div class="col-sm-2">
                <label for="">Password *</label>
            </div>
            <div class="col-sm-10">
                <input required name="password" type="password" class="form-control" placeholder="Masukan Password Anda">
            </div>
        </div>
        <div class="mb-3 row">
            <div class="col-sm-2">
                <button name="<?php echo isset($_GET['edit']) ? 'edit' : 'simpan'; ?>" type="submit" class="btn btn-primary btn-sm">Simpan</button>
            </div>
        </div>
    </form>
    <!-- <a href="" class="btn btn-primary btn-sm">Simpan</a> -->
</div>