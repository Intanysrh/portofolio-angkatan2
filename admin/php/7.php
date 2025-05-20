<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variable System | Superglobal Var</title>
</head>

<body>

    <form action="" method="get">
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
            <br>
            <button type="submit">Kirim</button>
        </div>
    </form>
    <br>

    <?php
    if (isset($_GET['nama'])) {
        $nama = $_GET['nama'];
        $nilai = $_GET['nilai'];
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
            $status = "Tidak Lulus";
        }
        echo "<br>";

        echo "Nama Peserta: $nama<br>";
        echo "Nilai Peserta: $nilai<br>";
        echo "Grade: $grade<br>";
        echo "Status: $status<br>";
    }
    ?>