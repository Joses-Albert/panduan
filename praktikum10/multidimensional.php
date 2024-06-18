<?php
// $matriks = [
//     [2, 3, 5],
//     [7, 4, 6],
//     [3, 2, 4]
// ];
// var_dump($matriks);
// echo "<br><br>";
// echo "nilai matriks pada baris ke-2 kolom ke-3 adalah " . $matriks[1][2];
$students = [
    [
        "nama" => "atika",
        "prodi" => "pendidikan komputer",
        "semester" => 7
    ],
    [
        "nama" => "meyda",
        "prodi" => "pendidikan komputer",
        "semester" => 5
    ]
];
echo "nama : " . $students[0]["nama"] . "<br>";
echo "prodi : " . $students[0]["prodi"] . "<br>";
?>