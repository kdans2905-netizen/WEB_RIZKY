<?php

include 'koneksi.php'

$NIM=$_POST['NIM'];

$NAMA=$_POST['NAMA'];

$ALAMAT=$_POST['ALAMAT'];

$JKL=$_POST['JKEL'];

$sql="UPDATE mahasiswa SET NIM ='$nim', NAMA, = nama, ALAMAT='SALAMAT', JKL $JKL WHERE NIM'$nim'";



if ($conn->query($sql) === TRUE) {


header('location: form.php');

} else {


echo "Error:" $sql. "<br>" $conn->error;

}



$conn->close();


?>