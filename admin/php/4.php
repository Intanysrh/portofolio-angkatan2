<?php
function callName()
{
    echo "Nama Saya Intan <br>";
}
function callNameLagi()
{
    return "Nama Saya Dwi";
}

function perkalian()
{
    $angka1 = 20;
    $angka2 = 20;
    $total = $angka1 * $angka2;
    return $total;
}
callName();
echo callNameLagi();
echo "<br>";
echo perkalian(30, 20);
echo perkalian(50, 20);


?>