<?php
$hargaAwal = 120000;

$diskon = 20; // 20%

$nilaiDiskon = ($diskon / 100) * $hargaAwal;

$hargaSetelahDiskon = $hargaAwal - $nilaiDiskon;

echo "Harga awal: Rp " . number_format($hargaAwal, 0, ',', '.') . "<br>";
echo "Nilai diskon (20%): Rp " . number_format($nilaiDiskon, 0, ',', '.') . "<br>";
echo "Harga setelah diskon: Rp " . number_format($hargaSetelahDiskon, 0, ',', '.') . "<br>";
?>
