<!-- if: percabangan dan logika, untuk menjalankan kode berdasarkan kondisi yang dicari -->

<?php

// operator pembanding
// = memberikan nilai
// == membandingkan
// === membandingkan tapi dengan tipe datanya
// ! artinya tidak atau sebaliknya, jadi tergantung konteks var nya
// empty artinya kosong
// isset artinya tidak kosong
// > artinya lebih besar. < lebih kecil. >= lebih besar sama dengan. <=lebih kecil sama dengan

// implementasinya seperti berikut or contoh nya:
$nama = "bambang";
if($nama == "bambang"){
    echo "iya";
}else{
    echo "bukan";
}
echo "<br>";

if($nama !== "bambang"){
    echo "iya";
}else{
    echo "bukan";
}
echo "<br>";

if (empty($nama)) {
    echo "yaa";
} else {
    echo "tidak";
}
echo "<br>";

if (isset($nama)) {
    echo "yaa";
} else {
    echo "tidak";
}
echo "<br>";

$suhu = 36;
if ($suhu > 35) {
    echo "Demam";
} else {
    echo "Normal";
}
echo "<br>";
echo "<br>";
echo "<br>";

// $suhu = 35;
// if ($suhu > 37) {
//     echo "Demam";
// } elseif ($suhu >= 35) {
//     echo "Normal";
// } else {
//     echo "Kedinginan";
// }
// echo "<br>";

// operator logika
// AND, &&, ||, !

$username = "admin";
$password = "admin";

if ($username == "admin" && $password =="admin") {
    echo "Login berhasil";
} else {
    echo "Login gagal";
}
