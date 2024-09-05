<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seleksi Angka</title>
</head>
<body>
    <form action="" method="post">
        <label for="inputText">Masukkan Teks : </label>
        <input type="text" name="inputText">
    </form>
</body>
</html>

<?php 

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $inputText = $_POST['inputText'];
        preg_match_all('/\d/', $inputText, $hasil); # ([a-zA-Z]) 
        echo "<hr>";
        if (!empty($hasil[0])) {
            # Mengembalikan nilai array menjadi string
            echo "Angka yang ditemukan: " . implode(", ", $hasil[0]);
        } else {
            echo "Tidak terdapat angka pada teks tersebut";
        }
    }

    
?>