<?php

function generateChessboardTable() {
    $numbersInBlackBoxes = [1, 2, 5, 7, 10, 11, 13, 14, 17, 19, 22, 23, 25, 26, 29, 31, 34, 35, 37, 38, 41, 43, 46, 47, 49, 50, 53, 55, 58, 59, 61, 62];

    echo '<table style="border-collapse: collapse;">';
    $number = 1;
    for ($row = 1; $row <= 8; $row++) {
        echo '<tr>';
        for ($col = 1; $col <= 8; $col++) {
            $isBlackBox = in_array($number, $numbersInBlackBoxes);
            $bgColor = $isBlackBox ? 'black' : 'white';
            $color = $isBlackBox ? 'white' : 'black';
            echo '<td style="border: 1px solid black; width: 30px; height: 30px; text-align: center; background-color: ' . $bgColor . '; color: ' . $color . ';">' . $number . '</td>';
            $number++;
        }
        echo '</tr>';
    }
    echo '</table>';
}

// Panggil fungsi
generateChessboardTable();

?>
