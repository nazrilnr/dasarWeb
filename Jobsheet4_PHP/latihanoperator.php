<?php
$totalSeats = 45;
$occupiedSeats = 28;

$emptySeats = $totalSeats - $occupiedSeats;
$percentageEmptySeats = ($emptySeats / $totalSeats) * 100;

echo "Total seat: $totalSeats <br>";
echo "Yang di duduki: $occupiedSeats <br>";
echo "Jumlah kursi kosong: $emptySeats <br>";
echo "Persentase kursi kosong: " . number_format($percentageEmptySeats, 2) . "%<br>";
?>
