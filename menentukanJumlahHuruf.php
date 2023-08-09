<?php

function countHurufKecil($inputString) {
    $hurufkecilCount = 0;

    for ($i = 0; $i < strlen($inputString); $i++) {
        if (ctype_lower($inputString[$i])) {
            $hurufkecilCount++;
        }
    }

    return $hurufkecilCount;
}

$input = "TranSISI";
$hurufkecilCount = countHurufKecil($input);

echo "' $input ' , Mengandung $hurufkecilCount buah huruf kecil.";

?>
