<?php 

$usia = [12, 15, 17, 20, 25, 30, 35, 40, 45, 50];
$anakAnak = 0;
$dewasa = 0;

foreach ($usia as $data) {
    
    if ($data >= 17 ) {
        $dewasa++;
    } else {
        $anakAnak++;
    }
}

echo "List Usia : " . implode(", ", $usia);
echo "<br>";
echo "Jumlah kategori Dewasa : " . $dewasa . "<br>";
echo "Jumlah kategori Anak-Anak : " . $anakAnak;

?>