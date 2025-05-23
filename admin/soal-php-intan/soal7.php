<!-- Algoritma ketujuh
1) START
2) Panggil NilaiAwal dengan nilai 75 dan NilaiPerbaikan dengan nilai 80
3) Komputer akan Memproses NilaiAwal dan NilaiPerbaikan
4) Komputer akan Menampilakan NilaiAwal yaitu 75 dan NilaiPerbaikan yaitu 80 Lalu Komputer
akan memproses kembali NilaiAwal dengan variable SimpanNilai dengan value sebagai NilaiAwal
yaitu 75 dan variable NilaiAwal dengan value sebagai NilaiPerbaikan yaitu 80 dan variable
NilaiPerbaikan dengan value SimpanNilai yaitu 75
5) Komputer akan menampilkan variable NilaiAwal yaitu 80 dan variable NilaiPerbaikan yaitu 75
END -->

<?php
$NilaiAwal = 75;

$NilaiPerbaikan = 80;

echo 'Nilai awal: ' . $NilaiAwal;
echo '<br>';
echo 'Nilai perbaikan: ' . $NilaiPerbaikan;
echo '<br>';

echo "Nilai perubahan: ";
echo "<br>";

$SimpanNilai = $NilaiAwal;
$NilaiAwal = $NilaiPerbaikan;
$NilaiPerbaikan = $SimpanNilai;

echo 'Nilai awal: ' . $NilaiAwal;
echo '<br>';
echo 'Nilai perbaikan: ' . $NilaiPerbaikan;
echo '<br>';

?>