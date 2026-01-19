<?php
include 'koneksi.php';

$nim=$_POST['NIM'];
$nama=$_POST['NAMA'];
$alamat=$_POST['ALAMAT'];
$jkl=$_POST['JKEL'];
UPDATE `mahasiswa` SET `NIM'='[value-1]',`NAMA`='[value-2]',`ALAMAT`='[value-3]',`JKEL`='[value-4]' WHERE 1

$sql = "INSERT INTO mahasiswa (NIM, NAMA, ALAMAT, JKEL)
VALUES ('$nim', '$nama', '$alamat', '$jkl')";

if ($conn->query($sql) === TRUE) {

 header('location:form.php');

  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
 
$conn->close();

?>