<?php

$bil1 = [80, 77, 65, 89, 55, 12, 90, 86];
$bil2 = [72, 99, 55, 81, 45, 90, 98];

# Mencari persamaan antara kedua variabel
$sama = array_intersect($bil1, $bil2);

# Membandingkan seluruh nilai kedua variabel
$array1 = array_diff($bil1, $bil2);
$array2 = array_diff($bil1, $bil2);

# Menggabungkan 2 array menjadi 1
$tidakSama = array_merge($array1, $array2);

echo "Bilangan yang ada di kedua variabel : <br>"; 
echo implode(", ", $sama);
echo "<br> <hr>";
echo "Bilangan yang tidak ada di kedua variabel : <br>"; 
echo implode(", ", $tidakSama);

?>