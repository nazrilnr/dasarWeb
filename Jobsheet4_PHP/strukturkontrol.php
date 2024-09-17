<?php
$nilaiNumerik = 92;
if ($nilaiNumerik >= 90 && $nilaiNumerik <= 100) {
    echo "Nilai huruf: A<br></br>";
} elseif ($nilaiNumerik >= 80 && $nilaiNumerik < 90) {
    echo "Nilai huruf: B";
} elseif ($nilaiNumerik >= 70 && $nilaiNumerik < 80) {
    echo "Nilai huruf: C";
} elseif ($nilaiNumerik < 70) {
    echo "Nilai huruf: D";
}

$jarakSaatIni = 0;
$jarakTarget = 500;
$peningkatanHarian = 30;
$hari = 0;
while ($jarakSaatIni < $jarakTarget) {
    $jarakSaatIni += $peningkatanHarian;
    $hari++;
}

echo "Jarak target: $jarakTarget km <br>";
echo "Peningkatan jarak per hari: $peningkatanHarian km <br>";
echo "Atlet tersebut memerlukan $hari hari untuk mencapai jarak 500 kilometer.<br>";
echo "Total jarak yang dicapai: $jarakSaatIni km<br><br>";

$jumlahLahan = 10;
$tanamanPerLahan = 5;
$buahPerTanaman = 10;
$jumlahBuah = 0;
for ($i = 1; $i <= $jumlahLahan; $i++) {
    $jumlahBuah += ($tanamanPerLahan * $buahPerTanaman);
}

echo "Jumlah lahan: $jumlahLahan <br>";
echo "Jumlah tanaman per lahan: $tanamanPerLahan <br>";
echo "Jumlah buah per tanaman: $buahPerTanaman <br>";
echo "Jumlah buah yang akan dipanen adalah: $jumlahBuah<br><br>";

$skorUjian = [85, 92, 78, 96, 88];
$totalSkor = 0;
echo "Skor Ujian:<br>";
foreach ($skorUjian as $skor) {
    echo "-> $skor<br>";
    $totalSkor += $skor;
}
echo "Total skor ujian adalah: $totalSkor<br><br>";

$nilaiSiswa = [85, 92, 58, 64, 90, 55, 88, 79, 70, 96];
echo "<strong>Hasil Ujian Siswa:</strong><br><ul>";
foreach ($nilaiSiswa as $index => $nilai) {
    if ($nilai < 60) {
        echo "<li>Nilai ke-" . ($index + 1) . ": $nilai (Tidak lulus)</li>";
        continue;
    }
    echo "<li>Nilai ke-" . ($index + 1) . ": $nilai (Lulus)</li>";
}
?>
