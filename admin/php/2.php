<?php
// tas

// $nama = array();
// $nama[] = "nama";

// array index (datanya bisa lebih dari satu)
$nama = array("intan", "dwi", "yaya", "sarah");
//   0  ,   1   ,   2   ,   3

print_r($nama);
echo "<br>";
echo "<br>";

echo $nama[3];
echo "<br>";
echo $nama[1];
echo "<br>";
echo $nama[2];
echo "<br>";
echo $nama[0];
echo "<br>";
echo "<br>";

$buah = ["Nanas", "Semangka", "Pepaya", "Pir"];
print_r($buah);
echo "<br>";
foreach ($buah as $b) {
    echo "Nama-nama buah " . $b . "<br>";
}

// array asosiatif : key nya menggunakan string
$kelas_web = [
    "nama" => "Budi",
    "umur" => 25,
    "jurusan" => "Junior Web Prog"
];

echo "Nama Siswa " . $kelas_web["nama"] . " Umur " . $kelas_web['umur'] . " jurusan " . $kelas_web['jurusan'];
echo "<br>";
echo "<br>";

$siswa = [
    [
        "nama" => "Intan",
        "umur" => 25,
        "jurusan" => "Junior Web Prog",
    ],
    [
        "nama" => "Dwi",
        "umur" => 26,
        "jurusan" => "Junior Web Prog",
    ]
];

print_r($siswa);
echo "<br>";
echo $siswa[1]['nama'];
echo "<br>";
echo "<br>";
foreach($siswa as $key => $sw) {
    echo "Nama : ". $sw['nama'] . "<br>";
    echo "Umur : " . $sw['umur'] . "<br>";
    echo "Jurusan : " . $sw['jurusan'] . "<br>";
    echo "<br>";
};
