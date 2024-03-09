<?php
class Solution {

    /**
     * @param String $s
     * @param String $t
     * @return Boolean
     */
    function isAnagram($s, $t) {
    // Check if the lengths of both strings are equal
    if (strlen($s) !== strlen($t)) {
        return false;
    }

    // Create arrays to store character frequencies in both strings
    $sArray = array_count_values(str_split($s));
    $tArray = array_count_values(str_split($t));

    // Compare the two arrays to check if they are equal
    return $sArray == $tArray;
}
}