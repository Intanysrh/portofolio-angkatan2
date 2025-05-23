<!-- 
 1) START
2) Masukkan Nilai kilometer
3) Komputer akan memproses perkalian atara Nilai kilometer dengan variable
konversi_km_ke_miles yaitu 0.621371 untuk mengkonversikan ke dalam mile
4) Komputer akan Menampilkan Hasil konversi km ke miles
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
            <label for="">Nilai KM</label>
            <input type="text" name="nilaikm" placeholder="Masukan Nilai">
        </div>
        <div class="form-group">
            <br>
            <button type="submit">Kirim</button>
        </div>
    </form>

    <?php

    if (isset($_POST['nilaikm'])) {
        $Nilaikilometer = $_POST['nilaikm'];

        $konversi_km_ke_miles = 0.621371;
        $total = $Nilaikilometer * $konversi_km_ke_miles;

        echo 'jarak nya dalam miles adalah ' . $total . ' miles';
    }

    ?>

</body>

</html>