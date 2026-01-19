<?php
$a="9";
$b="2.5";
$komentar="selamat datang";
//variable bertipe integer
echo ("nilai variable a adalah = $a <br>");
//varible bertipe real
echo ("nilai variabel b adalah = $b <br>");
//variabel bertipe string
echo ("nilai variabel komentar adalah = $komentar<br>");
//=============================================
// rumus penjumlahan
$tambah= $a + $b;
//rumus pengurangan
$kurang = $a - $b;
//rumus perkalian
$kali = $a * $b;
//rumus pembagian
$bagi = $a / $b;

echo ("hasil penjumlahan a dan b adalah = $tambah <br>");
echo ("hasil pengurangan a dan b adalah = $kurang<br>");
echo ("hasil perkalian a dan b adalah = $kali <br>");
echo ("hasil pembagian a dan b adalah = $bagi <br>");
$nama = "RPL";
$garis= "=====================================";
echo "<p>";
echo $garis."<br>";
echo $komentar. " di lab ". $nama. "<br>selamat belajar pemograman web <br>";
echo $garis."<br>";
?>