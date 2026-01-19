<!DOCTYPE html>
<html>
<head>
<style>
table, th, td {
    border: 3px solid black;
}
</style>
</head>
<body>

    <h2>IMPUT DATA MAHASISWA</h2>     
<form action="proses_tambah_mahasiswa.php"method = "POST">
  <label for="NIM">NIM:</label><br>

  <input type="number" id="nim" name="nim" value=""><br>
  <label for="name">NAMA:</label><br>

  <input type="text" id="name" name="name" value=""><br>
  <label for="alamat">ALAMAT:</label><br>

  <input type="text" id="alamat" name="alamat" value=""><br>
 
  <label for="nama">JENIS KELAMIN:</label><br>
  <select id="jkl" name="jkl"><br><br>
  <option value="">pilih</option>
  <option value="laki laki">laki laki</option>
  <option value="perempuan">perempuan</option>
  </select>
  <br><br><input type="submit" value="tambah data">
  
</form> 
<br>



<?php
include 'koneksi.php';
$sql = "SELECT * FROM mahasiswa";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr>
    <th>NIM</th>
    <th>NAMA</th>
    <th>ALAMAT</th>
    <th>JKL</th> 
    <th>AKSI</th>
    </tr>"; 
    
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr>
        <td>".$row["NIM"]."</td>
        <td>".$row["NAMA"]."</td>
        <td>".$row["ALAMAT"]."</td>
        <td>".$row["JKEL"]."</td>
        <td>
        <a href='edit.php?NIM=".$row['NIM']."'> EDIT<a> /
        <a href='delete.php?NIM=".$row['NIM']."'> HAPUS<a>
        </td></tr>";
        
    }
    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
?>
<p>data yang akan dimasukan akan dikirim ke "proses_tambah_mahasiswa.php"</p>

</body>
</html>