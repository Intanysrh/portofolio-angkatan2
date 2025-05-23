<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="post">
        <div class="form-group">
            <label for="">Nama Depan</label>
            <input type="text" name="NamaDepan" placeholder="Masukan Nama Anda">
        </div>
        <div class="form-group">
            <label for="">Nama Tengah</label>
            <input type="text" name="NamaTengah" placeholder="Masukan Nama Anda">
        </div>
        <div class="form-group">
            <label for="">Nama Belakang</label>
            <input type="text" name="NamaBelakang" placeholder="Masukan Nama Anda">
        </div>
        <div class="form-group">
            <br>
            <button type="submit">Kirim</button>
        </div>
    </form>

    <div class="form-group">
        <?php
        if (isset($_POST['NamaDepan'])) {
            $NamaDepan = $_POST['NamaDepan'];
            $NamaTengah = $_POST['NamaTengah'];
            $NamaBelakang = $_POST['NamaBelakang'];

            echo 'Nama depan: ' . $NamaDepan;
            echo '<br>';
            echo 'Nama tengah: ' . $NamaTengah;
            echo '<br>';
            echo 'Nama belakang: ' . $NamaBelakang;
            echo '<br>';

            echo $NamaDepan . " " . $NamaTengah . " " . $NamaBelakang;
        }

        ?>
    </div>
</body>

</html>