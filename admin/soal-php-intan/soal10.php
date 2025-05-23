<!-- 
START
2) Masukkan sembarang angka
3) Komputer akan memproses jika inputan lebih dari 0, maka akan di tampilkan angka
positif. jika inputan sama dengan 0 maka akan ditampilkan angka 0. Selain itu akan
ditampilkan angka Negatif
4) END 
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
            <label for="">Angka</label>
            <input type="text" name="angka" placeholder="Masukan angka">
        </div>
        <div class="form-group">
            <br>
            <button type="submit">Kirim</button>
        </div>

        <?php
        if (isset($_POST['angka'])) {
            $angka = $_POST['angka'];

            if ($angka > 0) {
                echo "Angka positif";
            } elseif ($angka == 0) {
                echo "Angka 0";
            } else {
                echo "Angka Negatif";
            }
        }
        ?>
    </form>
</body>

</html>