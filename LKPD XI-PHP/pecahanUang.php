<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pecahan Uang</title>
</head>
<body>
    <form action="" method="post">
        <label for="inputUang" name="inputUang">Masukkan Jumlah Uang : </label>
        <input type="number" name="inputUang">
        <button type="submit" name="btn-submit">Cek</button><hr>
    </form>
</body>
</html>

<?php 

if (isset($_POST['btn-submit'])) {
    $inputUang = $_POST['inputUang'];
    $lembaran = [100000, 50000, 20000, 10000, 5000, 2000, 1000, 500, 200, 100, 10];

    echo "Uang : Rp. " . number_format($inputUang) . "<br>";
    echo "Lembar Rupiah : <br>";
    echo "<ul>";
    foreach ($lembaran as $uang) {
        # membulatkan int
        $lembar = intval($inputUang / $uang);
        # modulus sisa uang yang belum terbagi
        $inputUang %= $uang;

        if ($lembar > 0) {
            echo "<li> Pecahan " . number_format($uang) . " = " . $lembar . "<br>";
        }
    }
    echo "</ul>";
}

?>