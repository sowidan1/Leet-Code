<?php
class Solution {

/**
 * @param String[] $strs
 * @return String[][]
 */
function groupAnagrams($strs) {
$anagrams = [];

foreach ($strs as $word) {
    // Sort the characters in the word to use it as a key
    $sortedWord = str_split($word);
    sort($sortedWord);
    $sortedWord = implode('', $sortedWord);

    // Check if the sorted word is already in the array
    if (array_key_exists($sortedWord, $anagrams)) {
        // If yes, append the original word to the corresponding group
        $anagrams[$sortedWord][] = $word;
    } else {
        // If no, create a new group with the sorted word as the key
        $anagrams[$sortedWord] = [$word];
    }
}

// Convert the values (groups of anagrams) to a list to get the final result
$result = array_values($anagrams);

return $result;
}}