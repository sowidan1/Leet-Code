<?php
class Solution {

function topKFrequent($nums, $k) {
    // Count the frequency of each element in the array
    $count = array_count_values($nums);
    
    // Sort the count array in descending order based on frequency
    arsort($count);
    
    // Initialize an array to store the top k frequent elements
    $result = [];
    
    // Extract the top k elements from the sorted count array
    $i = 0;
    foreach ($count as $num => $freq) {
        $result[] = $num;
        $i++;
        if ($i == $k) {
            break;
        }
    }

    return $result;
}
}