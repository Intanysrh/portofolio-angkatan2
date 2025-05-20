<!-- 
 variable system : var yg dibuat oleh php 
 $_POST, $_GET, $_SESSION, $_FILES, & $_REQUEST
 -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variable System | Superglobal Var</title>
</head>

<body>

    <form action="" method="post">
        <div class="form-group">
            <label for="">Nama</label>
            <input type="text" name="nama" placeholder="Masukan Nama Anda">
        </div>

        <br>

        <div class="form-group">
            <label for="">Nilai</label>
            <input type="number" name="nilai" placeholder="Masukan Nilai Anda">
        </div>
        <div class="form-group">
            <button type="submit">Kirim</button>
        </div>
    </form>
    <br>

    <?php
    if (isset($_POST['nama'])) {
        $nama = $_POST['nama'];
        $nilai = $_POST['nilai'];
        $grade = "";
        $status = "";

        if ($nilai >= 90) {
            $grade = "A";
        } elseif ($nilai >= 80) {
            $grade = "B";
        } elseif ($nilai >= 70) {
            $grade = "C";
        } elseif ($nilai >= 60) {
            $grade = "D";
        } else {
            $grade = "E";
        }

        if ($nilai > 70) {
            $status = "Lulus";
        } else {
            $status = "TidakLulus";
        }
        echo "<br>";

        echo "Nama Peserta: $nama<br>";
        echo "Nilai Peserta: $nilai<br>";
        echo "Grade: $grade<br>";
        echo "Status: $status<br>";
    }

    // shorthand / ternery
    // bisa pilih salah satu. antara yang diatas pake if isset, atau yang bawah dengan var isset.

    // $nama  = isset($_POST['nama']) ? $_POST['nama'] : '';
    // echo "Selamat siang " . $nama;

    ?>

    <!-- lanjut -->

</body>

</html>