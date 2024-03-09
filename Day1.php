<?php
class Solution {

    /**
     * @param Integer[] $nums
     * @return Boolean
     */
    function containsDuplicate($nums) {
        $occurrences = array_count_values($nums);
    
        foreach ($occurrences as $count) {
            if ($count > 1) {
                return true;
        }
    }
        return false; 
    }
}
?>