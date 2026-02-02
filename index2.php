<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator Sederhana</title>
    <link rel="stylesheet" href="css/style2.css">
</head>
<body>
    <!-- bagian container-->
    <div class="container">
    <h2>Kalkulator Sederhana</h2>
    <form id="fkalkulator">
        <input type="number" id="num1" placeholder="Masukan angka pertama">
        <select id="operator">
            <option value="+"> Penjumlahan (+)</option>
            <option value="-"> Pengurangan (-)</option>
            <option value="*"> Perkalian (X)</option>
            <option value="/"> Pembagian (/)</option>
        </select>
        <input type="number" id="num2" placeholder="Masukan angka kedua">

        <button type="button" class="biru" onclick="hitung()"> Hitung </button>
        <button type="button" class="orange" onclick="bersih()"> Bersih </button>
    </form>

    <h3>Hasil: <span id="hasil"></span></h3>

    <h3>History</h3>
    <ul id="history"></ul>
</div>

  <script src="js/script2.js"></script>  
</body>
</html>