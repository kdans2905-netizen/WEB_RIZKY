<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Mahasiswa</title>
</head>
<body>
<h2>Edit data Mahasiswa</h2>
<?php
include 'koneksi.php';
$nim=$_GET['NIM'];
$sql = "SELECT * FROM mahasiswa WHERE NIM ='$nim'";
$hasil= mysqli_query($conn,$sql);
$data = mysqli_fetch_assoc($hasil);
?>
<h2>Edit data mahasiswa</h2>
<form action="proses_edit.php" METHOD = "POST">

  <label for="NIM">NIM:</label><br>
  <input type="number" id="nim" name="nim" value="<?php echo $data['NIM']?>"> <br><br>

  <label for="nama">Nama:</label><br>
  <input type="text" id="nama" name="nama" value="<?php echo $data['NIM']?>"><br><br>

  <label for="alamat">Alamat:</label><br>
  <input type="text" id="alamat" name="alamat" value="<?php echo $data['NIM']?>"> <br><br>

  <label for="nama">Jenis kelamin:</label><br>
<select id="jkl" name="jkl">
   <option value="<?php echo $data['jkl']; ?>"><?php echo $data['jkl']; ?> </option>
    <option value="laki-laki">laki-laki </option>
    <option value="Perempuan">Perempuan</option>
    </select>
    <br><br>

    <input type="submit" value="Tambah Data">
</form>  

</body>
</html>