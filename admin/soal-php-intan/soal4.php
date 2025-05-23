<?php
$angka1 = '10';
echo $angka1;
echo '<br>';

$angka2 = '5';
echo $angka2;
echo '<br>';

function perkalian()
{
    $angka1 = 10;
    $angka2 = 5;
    $total = $angka1 * $angka2;
    return $total;
}
$total = $angka1 * $angka2;
echo $total;
echo '<br>';
echo "jadi hasil perkalian nya adalah " . $total;
echo '<br>';
echo '<br>';
echo $angka1 . "x" . $angka2 . "=" . $total;
?>