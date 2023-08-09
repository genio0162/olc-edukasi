<?php

function encrypt($input) {
    $plain = 'DFHKNQABCDEGHIJKLMNOPQRSTUVWXYZ';
    $cipher = 'EDKGSK';

    $input = strtoupper($input);
    $output = '';

    for ($i = 0; $i < strlen($input); $i++) {
        $char = $input[$i];
        $pos = strpos($plain, $char);

if ($pos !== false) {
            $output .= isset($cipher[$pos]) ? $cipher[$pos] : $char;
        } else {
            $output .= $char;
        }
    }

    return $output;
}

$input = "DFHKNQ";
$encrypted = encrypt($input);

echo "Output: " . $encrypted;

?>
