<?php
class Solution{
    function twoSum($nums, $target){
        $sum=0;
        $number1=0;
        $number2=0;
        for($h=0;$h<count($nums); $h++){
            $number1=nums[$h];
            for($i=0; $i<count($nums); $i++){
                if($h==$i){
                    continue;
                }
            $number2=$nums[$i];
                if(($number1+$number2)==$target){
                    break 2;
                }
            }
        }
        return [$h,$i];
    }
}



?>