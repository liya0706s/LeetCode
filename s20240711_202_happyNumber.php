<?php
class Solution{
    const minVal=1;
    const maxVal=214783647;

    // 定義一個計算數字平方和的函數sum
    function sum($n){
        // 初始化變數sum，儲存平方和
        $sum=0;
        // 將數字轉為字串，並拆分為單個數字的陣列
        $numbers=str_split($n);

        // 遍歷每個數字
        foreach($numbers as $number){
            // 將數字轉為平方並累加到sum 
            $sum+=pow($number,2);
        }
        return $sum;
    }

    function isHappy($n){
        // 初始化慢指標和快指標為輸入的數字
        $slow=$n;
        $fast=$n;
        // 使用 do-while 循環來檢查數字序列是否會進入無限循環
        do{
            // 慢指標每次走一步，即計算一次平方和
            $slow=$this->sum($slow);
            // 快指標每次走兩步，即計算兩次平方和
            // 快指標每次計算兩次平方和，目的是檢測循環
            $fast=$this->sum($this->sum($fast));
        }while($slow!=$fast);  // 直到慢指標和快指標相遇
        // 若相遇點為1，則返回 true，表示是 Happy Number
        return ($slow==1);
    }
}

?>