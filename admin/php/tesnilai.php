<!-- // output:
// nama peserta: nama kalian, 
// nilai: 85, 
// grade: B, 
// status: "Lulus"
// peserta dinyatakan lulus jika peserta nilainya lebih dari 70 (lulus: >70)
// dan tidak lulus adalah dibawah 70 atau kurang dari 70. kalau nilai nya sama dengan 70 maka juga tidak lulus. (tidak lulus: <=70)
// nilai juga dikategorikan dengan grade huruf:
// A: 90-100
// B: 80-89
// C: 70-79
// D: 60-69
// E: dibawah 60 -->

<?php
$nilai = 85;
if ($nilai > 70) {
    $status = "Lulus";
} else {
    $status = "TidakLulus";
}
echo "<br>";


$nilai = 85;
if ($nilai >= 90) {
    $grade = "A";
} elseif ($nilai >= 80) {
    $grade = "B";
} elseif ($nilai >= 70) {
    $grade = "C";
} elseif ($nilai >= 60) {
    $grade = "D";
} else {
    $grade = "E";
}


$nama = "Intan";
echo $nama;
echo "<br>";
$nilai = 85;
echo $nilai;
echo "<br>";
$grade = "B";
echo $grade;
echo "<br>";
$status = "Lulus";
echo $status;
echo "<br>";
echo "<br>";
echo "<br>";

echo "Nama Peserta: $nama<br>";
echo "Nilai Peserta: $nilai<br>";
echo "Grade: $grade<br>";
echo "Status: $status<br>";
