<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hitung Jam Kerja</title>
</head>
<body>
    <form action="" method="POST">
        <label for="jamKerja">Lama Kerja : </label>
        <input type="number" name="jamKerja" required>
        <label for="jamLembur">Jam Lebih : </label>
        <input type="number" name="jamLembur" required>
        <button type="submit" name="btn-submit">Cek</button>
    </form>
</body>
</html>


<?php 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    # ternary condition
    $jamKerja = isset($_POST['jamKerja']) ? (int)$_POST['jamKerja'] : 0;
    $jamLembur = isset($_POST['jamLembur']) ? (int)$_POST['jamLembur'] : 0;
    // $satuJam = 50000;
    // $duaJam = 25000;
    $uangKompensasi = 50000 + 25000 * $jamLembur - 25000;
    
    echo "Lama Kerja : " . $jamKerja + $jamLembur . " Jam"; echo "<br>";
    echo "Jam Lebih : " . $jamLembur . " Jam"; echo "<br>"; 
    echo "Jumlah Kompensasi : Rp. " . number_format($uangKompensasi);
}


?>