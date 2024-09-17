<?php
$grades = [85, 92, 78, 64, 90, 75, 88, 79, 70, 96];

sort($grades);

$filteredGrades = array_slice($grades, 2, -2);

$total = array_sum($filteredGrades);

$average = $total / count($filteredGrades);

echo "Total skor setelah mengabaikan dua nilai tertinggi dan terendah: $total <br>";
echo "Rata-rata skor setelah mengabaikan dua nilai tertinggi dan terendah: $average";
?>