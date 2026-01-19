<?php


$sql = "DELETE FROM mahasiswa WHERE NIM ='$nim'";include 'koneksi.php';
$nim=$_GET['nim'];

if ($conn->query($sql) === TRUE) {
  header('location:form.php');
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}



$conn->close();