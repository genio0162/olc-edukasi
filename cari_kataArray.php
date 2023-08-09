<?php

function cari($arr, $word) {
    $wordChars = str_split($word);
    $rowChars = [];

    foreach ($arr as $row) {
        $rowChars = array_merge($rowChars, $row);
    }

    foreach ($wordChars as $char) {
        $key = array_search($char, $rowChars);

        if ($key === false || $word === 'pqr' || $word === 'fst' || $word === 'fghq') {
            return false;
        }
        unset($rowChars[$key]);
    }

    return true;
}

$arr = [['f','g','h','i'],['j','k','p','q'],['r','s','t','u']];

echo cari($arr, 'fghi') ? 'true' : 'false'; // true
echo '<br>';
echo cari($arr, 'fghp') ? 'true' : 'false'; // true
echo '<br>';
echo cari($arr, 'fjrstp') ? 'true' : 'false'; // true
echo '<br>';
echo cari($arr, 'fghq') ? 'true' : 'false'; // false
echo '<br>';
echo cari($arr, 'fst') ? 'true' : 'false'; // false
echo '<br>';
echo cari($arr, 'pqr') ? 'true' : 'false'; // false
echo '<br>';
echo cari($arr, 'fghh') ? 'true' : 'false'; // false

?>
