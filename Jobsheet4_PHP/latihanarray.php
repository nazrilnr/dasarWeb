<?php
$siswa = [
    ['nama' => 'Alice', 'nilai' => 85],
    ['nama' => 'Bob', 'nilai' => 92],
    ['nama' => 'Charlie', 'nilai' => 78],
    ['nama' => 'David', 'nilai' => 64],
    ['nama' => 'Eva', 'nilai' => 90]
];

$totalNilai = 0;
foreach ($siswa as $dataSiswa) {
    $totalNilai += $dataSiswa['nilai'];
}

$rataRataKelas = $totalNilai / count($siswa);

echo "Rata-rata nilai kelas: " . number_format($rataRataKelas, 2) . "<br><br>";

echo "Siswa yang mendapatkan nilai di atas rata-rata kelas:<br>";
foreach ($siswa as $dataSiswa) {
    if ($dataSiswa['nilai'] > $rataRataKelas) {
        echo "Nama: " . $dataSiswa['nama'] . ", Nilai: " . $dataSiswa['nilai'] . "<br>";
    }
}
?>
