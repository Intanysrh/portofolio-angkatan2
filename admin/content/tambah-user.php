<?php
if (isset($_POST['simpan'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = sha1($_POST['password']);

    $query = mysqli_query($config, "INSERT INTO users (id_level, name, email, password) VALUES ('$id_level', '$name','$email','$password')");
    if ($query) {
        header(("location:?page=user&tambah=berhasil"));
    }
}

if ($_SESSION['LEVEL'] != 1) {
    echo "<h1>ANDA TIDAK BERHAK KE SINI! AKSES ANDA TERBATAS!</h1>";
    echo "<a href='dashboard.php' class='btn btn-warning'>Kembali</a>";
    die;
    header("location:dashboard.php?failed=access");
}


$header = isset($_GET['edit']) ? "Edit" : "Tambah";
$id_user = isset($_GET['edit']) ? $_GET['edit'] : '';
$queryEdit = mysqli_query($config, "SELECT * FROM users WHERE id='$id_user'");
$rowEdit = mysqli_fetch_assoc($queryEdit);

if (isset($_POST['edit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = sha1($_POST['password']);

    if ($password == '') {
        $queryUpdate = mysqli_query($config, "UPDATE users SET id_level='$id_level', name='$name', email='$email' WHERE id='$id_user'");
    }

    $queryUpdate = mysqli_query($config, "UPDATE users SET id_level='$id_level', name='$name', email='$email', password='$password' WHERE id='$id_user'");
    if ($queryUpdate) {
        header("location:?page=user&ubah=berhasil");
    }
}

$queryLevels = mysqli_query($config, "SELECT * FROM levels ORDER BY id DESC");
$rowLevels = mysqli_fetch_all($queryLevels, MYSQLI_ASSOC);

?>
<div class="card-body">
    <form action="" method="post">
        <div class="mb-3 row">
            <div class="col-sm-2">
                <label for="">Nama Level *</label>
            </div>
            <div class="col-sm-10">
                <select name="id_level" id="" class="form-control">
                    <option value="">Pilih Level</option>
                    <!-- Data option ini diambil dari table levels -->
                    <?php foreach ($rowLevels as $level): ?>
                        <option <?php echo isset($_GET['edit']) ? ($level['id'] == $rowEdit['id_level']) ? 'selected' : '' : '' ?>
                            value="<?php echo $level['id'] ?>"><?php echo $level['name_level'] ?></option>
                    <?php endforeach ?>
                    <!-- end option -->
                </select>
            </div>
        </div>
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