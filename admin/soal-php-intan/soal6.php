<!-- 
START
2) Masukkan Nilai Uang Sendiri dan Nilai Uang dari Teman Kamu
3) Komputer akan menjumlah Nilai Uang Sendiri dan Nilai Uang dari Teman Kamu
4) Komputer akan menampilkan Nilai Uang Sendiri, Nilai Uang dari Teman Kamu dan
penjumlahannya
5) END 
-->

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
            <label for="">Uang Sendiri</label>
            <input type="text" name="uangsendiri" placeholder="Masukan Nomilai">
        </div>
        <div class="form-group">
            <label for="">Uang Teman</label>
            <input type="text" name="uangTeman" placeholder="Masukan Nominal">
        </div>
        <div class="form-group">
            <br>
            <button type="submit">Hasil</button>
        </div>
    </form>

    <div class="form-group">
        <?php
        if (isset($_POST['uangsendiri'])) {
            $UangSendiri = $_POST['uangsendiri'];
            $UangTeman = $_POST['uangTeman'];

            $jumlah = $UangSendiri + $UangTeman;
            echo "Uang Sendiri: " . $UangSendiri . "<br>" . "Uang Teman: " . $UangTeman . "<br>" . "Jumlah uang kami: " . $jumlah;
        }

        ?>
    </div>
</body>

</html>