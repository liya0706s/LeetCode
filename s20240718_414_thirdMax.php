<?php
class Solution{
    function thirdMax($nums){
        $nums=array_unique($nums);
        if(count($nums)<3){
            return max($nums);
        }else{
            rsort($nums);
            return $nums[2];
        }
    }
}


?>