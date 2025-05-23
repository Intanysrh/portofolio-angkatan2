<!-- 
START
2) Panggil celcius dengan nilai 37.5
3) Komputer akan memproses konversi dari celcius kedalam Fahrenheit dengan rumus
(celcius x 1.8)+ 32
4) Komputer akan menampilkan hasil celcius dan juga hasil konversi dari celcius ke
Fahrenheit
5) END 
-->

<?php
$Celcius = 37.5;

// function konfersi() {
//     $Celcius = 37.5;
//     $Fahrenheit = ($Celcius * 1.8) + 32;
// };
$Fahrenheit = ($Celcius * 1.8) + 32;

echo "Celcius: " . $Celcius;
echo "<br>";
echo "Fahrenheit: " . $Fahrenheit;


?>