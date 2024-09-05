<?php 

$data = [80, 90, 75, 100, 85, 100, 66];
$cari = 100;

function hitungAngka($data, $cari) {
    $jumlah = 0;
    foreach ($data as $angka) {
        if ($angka == $cari) {
            $jumlah++;
        } 
    }
    return $jumlah;
}

$jumlahAngka = hitungAngka($data, $cari);   
echo "Jumlah angka $cari = $jumlahAngka";

?>