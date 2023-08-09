<?php

$nilai = "72 65 73 78 75 74 90 81 87 65 55 69 72 78 79 91 100 40 67 77 86";

// menjadikan string ke array
$nilaiArray = explode(' ', $nilai);

// konversi integer ke string
$nilaiArray = array_map('intval', $nilaiArray);

//mehitung total nilai
$totalNilai = array_sum($nilaiArray);

//Mengurutkan Nilai
sort($nilaiArray);

// Menghitung nilai rata-rata
$averageNilai = $totalNilai / count($nilaiArray);

//mendapatkan 7 nilai tertinggi dan 7 nilai terendah
$nilaiTerkecil = array_slice($nilaiArray, 0, 7);
$nilaiTinggi = array_slice($nilaiArray, -7);

// Print the results
echo "Nilai: " . $nilai . "<br>";
echo "1. Nilai Rata-Rata: " . $averageNilai . "<br>";
echo "3. 7 Nilai Tertinggi: " . implode(', ', $nilaiTinggi) . "<br>";
echo "2. 7 Nilai Terendah: " . implode(', ', $nilaiTerkecil) . "<br>";
