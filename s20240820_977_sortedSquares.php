<?php
class Solution{
    function sortedSquares($num){
        foreach($num as $key=>$value){
            $num[$key]=pow($value,2);
        }
        sort($num);
        return $num;
    }
}


?>