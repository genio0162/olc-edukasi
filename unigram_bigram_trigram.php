
<?php
function generateUnigrams($inputString) {
    $words = preg_split('/\s+/', $inputString);

    return $words;
}
function generateBigrams($inputString) {
    $words = preg_split('/\s+/', $inputString);
    $bigrams = array();

    for ($i = 0; $i < count($words) - 1; $i++) {
        $bigram = $words[$i] . ' ' . $words[$i + 1];
        $isUnique = true;

        // Check if both words in the bigram are unique
        for ($j = 0; $j < count($bigrams); $j++) {
            $existingBigramWords = explode(' ', $bigrams[$j]);
            if (in_array($words[$i], $existingBigramWords) || in_array($words[$i + 1], $existingBigramWords)) {
                $isUnique = false;
                break;
            }
        }

        if ($isUnique) {
            $bigrams[] = $bigram;
        }
    }

    return $bigrams;
}

function generateTrigrams($inputString) {
    $words = preg_split('/\s+/', $inputString);
    $trigrams = array();

    for ($i = 0; $i < count($words) - 2; $i++) {
        $trigram = $words[$i] . ' ' . $words[$i + 1] . ' ' . $words[$i + 2];
        $isUnique = true;

        // Check if all words in the trigram are unique
        for ($j = 0; $j < count($trigrams); $j++) {
            $existingTrigramWords = explode(' ', $trigrams[$j]);
            if (in_array($words[$i], $existingTrigramWords) || in_array($words[$i + 1], $existingTrigramWords) || in_array($words[$i + 2], $existingTrigramWords)) {
                $isUnique = false;
                break;
            }
        }

        if ($isUnique) {
            $trigrams[] = $trigram;
        }
    }

    return $trigrams;
}

$input = "Jakarta adalah ibu kota negara indonesia";

$unigrams = generateUnigrams($input);
$bigrams = generateBigrams($input);
$trigrams = generateTrigrams($input);

echo "a. Bigram : " . implode(', ', $unigrams) . "<br>";
echo "b. Bigram : " . implode(', ', $bigrams) . "<br>";
echo "c. trigram : " . implode(', ', $trigrams) . "<br>";

?>

