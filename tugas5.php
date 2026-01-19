<?php
$bln = date("M");
$hari = 31;
$hari1 = 30;
$hari2 = 28;
switch($bln)
{
case "Jan" : $namaBln = "Januari";
break;
case "Feb" : $namaBln = "Februari";
break;
case "Mar" : $namaBln = "Maret";
break;
case "Apr" : $namaBln = "April";
break;
case "May" : $namaBln = "Mei";
break;
case "Jun" : $namaBln = "Juni";
break;
case "Jul" : $namaBln = "Juli";
break;
case "Aug" : $namaBln = "Agustus";
break;
case "Sep" : $namaBln = "September";
break;
case "Oct" : $namaBln = "Oktober";
break;
case "Nov" : $namaBln = "November";
break;
case "Dec" : $namaBln = "Desember";
break;
}
echo "Nama bulan sekarang adalah : ".$namaBln;
echo " dan ada ".$hari1;
echo" hari";
?>