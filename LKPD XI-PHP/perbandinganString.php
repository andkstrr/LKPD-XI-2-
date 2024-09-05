<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perbandingan Nama</title>
</head>
<body>
    <form action="" method="post">
        <label for="nama1">Masukkan Nama 1 : </label>
        <input type="text" name="nama1">
        <label for="nama2">Masukkan Nama 2 : </label>
        <input type="text" name="nama2">
        <button type="submit">Cek</button>
        <hr>
    </form>
</body>
</html>

<?php 

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nama1 = $_POST['nama1'];
        $nama2 = $_POST['nama2'];

        # menghitung jumlah karakter dalam string
        $karakter1= strlen($nama1);
        $karakter2 = strlen($nama2);

        # menghasilkan angka yang bukan negatif
        $selisih = abs($karakter1 - $karakter2); 

        if ($karakter1 > $karakter2) {
            echo "$nama1 memiliki jumlah karakter yang lebih banyak dari $nama2 : selisih $selisih karakter";
        } else if ($karakter1 < $karakter2) {   
            echo "$nama2 memiliki jumlah karakter yang lebih banyak dari $nama2 : selisih $selisih karakter";
        } else {
            echo "$nama1 dan $nama2 memiliki jumlah karakter yang sama";
        }
    }

?>