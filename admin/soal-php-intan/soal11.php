<!-- 1) START
2) Masukkan sembarang angka
3) Komputer akan memproses jika inputan dengan modulus 2 menghasilkan sisa 0 sama
dengan 0 hasilnya akan true, maka akan menampilkan inputannya dan angka genap. Jika
inputan dengan modulus 2 menghasilkan sisa 1 sama dengan 0 hasilnya akan false,
maka akan menampilkan inputan dan angka ganjil
4) END -->

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
            <input type="number" name="angka" placeholder="Masukan angka">
        </div>
        <div class="form-group">
            <button type="submit">Kirim</button>
        </div>

        <?php
        if (isset($_POST['angka'])) {
            $angka = $_POST['angka'];
            if ($angka % 2 == 0) {
                echo "Inputan : " . $angka . " merupakan GENAP";
            } else {
                echo "Inputan : " . $angka . " merupakan GANJIL";
            }
        }

        ?>

    </form>
</body>

</html>