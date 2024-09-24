<?php
function perkenalan(){
    echo "Assalamualaikum, ";
    echo "Perkenalkan, nama saya Nazril<br/>"; 
    echo "Senang berkenalan dengan Anda<br/>";
    echo "Saya berasal dari Probolinggo<br>";
    echo "<br></br>";
}
//memanggil fungsi yang sudah dibuat
perkenalan();
?>

<?php
//membuat fungsi
function perkenalan1($nama, $salam){
    echo $salam.". ";
    echo "Perkenalkan, nama saya ".$nama."<br/>";
    echo "Senang berkenalan dengan Anda<br/>";
}
//memanggil fungsi yang sudah dibuat
perkenalan1("Nazreal", "Whats Up");

echo "<hr>";

$saya = "Nazreall";
$ucapanSalam = "Selamat pagi, PAGIIIII";

//memanggil lagi
perkenalan1($saya, $ucapanSalam);
echo "<br></br>";
?>

<?php
//membuat fungsi
function perkenalan2($nama, $salam="Assalamualaikum"){
    echo $salam.". ";
    echo "Perkenalkan, nama saya ".$nama."<br/>";
    echo "Senang berkenalan dengan Anda<br/>";
}

//memanggil fungsi yang sudah dibuat
perkenalan2("Nazreall", "Hallo");

echo "<hr>";

$saya = "Elok";
$ucapanSalam = "Selamat pagi";

//memanggil lagi tanpa mengisi parameter salam
perkenalan2($saya);
?>