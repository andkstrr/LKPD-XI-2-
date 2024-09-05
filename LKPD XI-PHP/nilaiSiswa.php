<?php 

# array multidimensi
$student = [
    [
        'nama' => 'Andi',
        'nilai' => [80, 78, 82, 78, 88],
    ],
    [
        'nama' => 'Beni',
        'nilai' => [86, 70, 80, 85, 81],
    ],
    [   
        'nama' => 'Dani',
        'nilai' => [83, 91, 70, 73, 81],
    ],
    [
        'nama' => 'Eko',
        'nilai' => [89, 85, 84, 86, 88],
    ],
];

// print_r($student);
foreach($student as $average) {
    $nama = $average['nama'];
    $nilai = $average['nilai'];
    $averageAll = array_sum($nilai) / count($nilai);

    echo $nama . " = ";
    echo $averageAll;
    echo "<br>";
}

?>