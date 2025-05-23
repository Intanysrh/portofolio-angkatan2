<?php
$UangSendiri = '500';
echo "Uang sendiri: " . $UangSendiri;
echo '<br>';

$UangDariTeman = '250';
echo "Uang teman: " . $UangDariTeman;
echo '<br>';

function penjumlahan()
{
    $UangSendiri = 500;
    $UangDariTeman = 250;
    $total = $UangSendiri + $UangDariTeman;
    return $total;
}
$total = $UangSendiri + $UangDariTeman;
echo $total;
echo '<br>';
echo "jadi jumlah uang kami adalah " . $total;
?>