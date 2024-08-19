<?php
class Solution{
    // 定義一個方法 'isPrime'，用於判斷一個數字是否為質數
    function isPrime($number){
        // 如果數字為1，則返回false，因為1不是質數
        if($number==1){
            return false;
        }

        // 從2開始，遍歷所有小於該數的數字
        for($h=2;$h<$number;$h++){
            // 如果發現有數字可以整除該數字，則該數字就不是質數，返回false
            if(($number%$h)==0){
                return false;
            }
        }
        // 如果沒有發現任何可以整除該數字的數字，該數則是質數，返回true
        return true;
    }

    // 定義一個方法 'countPrimeSetBits'，用於計算在[L,R]範圍內，設置位數為質數的整數個數
    function countPrimeSetBits($L,$R){
        // 初始化計數器為0
        $count=0;

        // 從L到R遍歷所有數字
        for($h=$L;$h<=$R;$h++){
            // 將當前的數字轉換為二進制字符串
            $bin=decbin($h);

            // 用str_replace替換掉所有的0, 只留下1, 這樣setBits只包含所有的1
            $setBits=str_replace("0","",$bin);
            // 計算setBits中1的數量，這就是設置位數
            $setBitsNumber=strlen($setBits);

            // 如果設置位數是質數，則計數器增加
            if($this->isPrime($setBitsNumber)){
                $count++;
            }
        }

        // 返回計算的質數位數的總數
        return $count;
    }
}

?>