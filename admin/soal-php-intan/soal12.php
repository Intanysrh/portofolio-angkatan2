<!-- 
Algoritma ke duabelas
1) START
2) Masukkan Nilai Inputan 1, 2 dan 3
3) Komputer akan memproses jika inputan 1 lebih besar sama dengan inputan 2 dan
inputan 1 lebih besar sama dengan inputan 3 maka akan memproses terbesar inputan 1.
Jika inputan 2 lebih besar sama dengan inputan 1 dan inputan 2 lebih besar sama
dengan inputan 3, maka akan memproses terbesar adalah inputan 2. Selain dari itu
inputan 3 terbesar

4) Komputer akan menampilkan angka terbesar sesuai kondisi dalam pemrosesan
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
            <label for="">Nilai 1</label>
            <input type="number" name="angka1" placeholder="Masukan angka">
        </div>
        <div class="form-group">
            <label for="">Nilai 2</label>
            <input type="number" name="angka2" placeholder="Masukan angka">
        </div>
        <div class="form-group">
            <label for="">Nilai 3</label>
            <input type="number" name="angka3" placeholder="Masukan angka">
        </div>
        <div class="form-group">
            <button type="submit" name="kirim">Kirim</button>
        </div>

    </form>
    <?php

    if (isset($_POST['kirim'])) {
        $angka1 = $_POST['angka1'];
        $angka2 = $_POST['angka2'];
        $angka3 = $_POST['angka3'];

        if ($angka1 >= $angka2 && $angka1 >= $angka3) {
            echo "Nilai pertama adalah nilai paling besar.";
        } elseif ($angka2 >= $angka1 && $angka2 >= $angka3) {
            echo "Nilai kedua adalah nilai paling besar.";
        } else {
            echo "Nilai ketiga adalah nilai paling besar.";
        }
    }
    ?>

</body>

</html>