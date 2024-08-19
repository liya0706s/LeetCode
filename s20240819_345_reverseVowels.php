<?php
class Solution{
    function veverseVowels($s){
        $vowels=['a','e','i','o','u','A','E','I','O','U'];

        // put an entire string into the array
        $sArr=str_split($s);

        // identify all vowels and put them into an array & check their position in the string
        // 定義兩個空陣列：一個用來放母音 ($sArrVowels) ，一個用來放母音在字符串中的位置 ($sArrVowelsPos)
        $sArrVowels=[]; 
        $sArrVowelsPos=[];
        // 遍歷 $sArr 中的每個字符
        foreach($sArr as $key => $value){
            // 如果當前的字符是母音，則將該字符加入$sArrVowels，並將其索引加入 $sArrVowelsPos 
            if(in_array($value, $vowels)){
                $sArrVowels[]=$value;
                $sArrVowelsPos[]=$key;
            }
        }

        // reverse the vowels in the array
        // 反轉存儲母音的陣列 $sArrVowels，並將結果存入 $sArrVowelsReversed
        $sArrVowelsReversed=array_reverse($sArrVowels);

        // put them back in the string
        // 將反轉後的母音按原來的位置放回到 $sArr 中
        foreach($sArrVowelsPos as $pos=>$key){
            $sArr[$key]=$sArrVowelsReversed[$pos];
        }
        // 將字符陣列重新組合為字符串，並返回
        return implode("",$sArr);
    }
}

?>