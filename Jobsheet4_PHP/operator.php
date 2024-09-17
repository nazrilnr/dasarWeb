<?php
$a = 10;
$b = 5;
$hasilTambah = $a + $b;
$hasilKurang = $a - $b;
$hasilKali = $a * $b;
$hasilBagi = $a / $b;
$sisaBagi = $a % $b;
$pangkat = $a ** $b;

echo "Nilai A: $a <br>";
echo "Nilai B: $b <br><br>";

echo "Hasil Penjumlahan: $hasilTambah <br>";
echo "Hasil Pengurangan: $hasilKurang <br>";
echo "Hasil Perkalian: $hasilKali <br>";
echo "Hasil Pembagian: $hasilBagi <br>";
echo "Sisa Bagi (Modulus): $sisaBagi <br>";
echo "Hasil Pangkat: $pangkat <br></br>";

$hasilSama = $a == $b;
$hasilTidakSama = $a != $b;
$hasilLebihKecil = $a < $b;
$hasilLebihBesar = $a > $b;
$hasilLebihKecilSama = $a <= $b;
$hasilLebihBesarSama = $a >= $b;

echo "Nilai A: $a <br>";
echo "Nilai B: $b <br><br>";

echo "Apakah A sama dengan B? " . ($hasilSama ? 'Ya' : 'Tidak') . "<br>";
echo "Apakah A tidak sama dengan B? " . ($hasilTidakSama ? 'Ya' : 'Tidak') . "<br>";
echo "Apakah A lebih kecil dari B? " . ($hasilLebihKecil ? 'Ya' : 'Tidak') . "<br>";
echo "Apakah A lebih besar dari B? " . ($hasilLebihBesar ? 'Ya' : 'Tidak') . "<br>";
echo "Apakah A lebih kecil atau sama dengan B? " . ($hasilLebihKecilSama ? 'Ya' : 'Tidak') . "<br>";
echo "Apakah A lebih besar atau sama dengan B? " . ($hasilLebihBesarSama ? 'Ya' : 'Tidak') . "<br></br>";

$a = true; 
$b = false; 
$hasilAnd = $a && $b;
$hasilOr = $a || $b;
$hasilNotA = !$a;
$hasilNotB = !$b;

echo "Nilai A: " . ($a ? 'true' : 'false') . "<br>";
echo "Nilai B: " . ($b ? 'true' : 'false') . "<br><br>";

echo "Hasil AND (A && B): " . ($hasilAnd ? 'true' : 'false') . "<br>";
echo "Hasil OR (A || B): " . ($hasilOr ? 'true' : 'false') . "<br>";
echo "Hasil NOT A (!A): " . ($hasilNotA ? 'true' : 'false') . "<br>";
echo "Hasil NOT B (!B): " . ($hasilNotB ? 'true' : 'false') . "<br></br>";

$a = 10;
$b = 5;
echo "Nilai A sebelum operasi: $a <br>";
echo "Nilai B: $b <br><br>";

$a += $b;
echo "Hasil A += B: $a <br>";
$a -= $b;
echo "Hasil A -= B: $a <br>";
$a *= $b;
echo "Hasil A *= B: $a <br>";
$a /= $b;
echo "Hasil A /= B: $a <br>";
$a %= $b;
echo "Hasil A %= B: $a <br></br>";

$a = 10;  
$b = "10"; 
$hasilIdentik = $a === $b;
$hasilTidakIdentik = $a !== $b;

echo "Nilai A: $a <br>";
echo "Nilai B: $b <br><br>";

echo "Apakah A identik dengan B (===)? " . ($hasilIdentik ? 'Ya' : 'Tidak') . "<br>";
echo "Apakah A tidak identik dengan B (!==)? " . ($hasilTidakIdentik ? 'Ya' : 'Tidak') . "<br></br>";
?>
