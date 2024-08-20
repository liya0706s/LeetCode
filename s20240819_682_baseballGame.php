<?php
class Solution{
    function calPoints($ops){
        $sumArr=[];
        foreach($ops as $value){
            if(is_numeric($value)){
                // 如果是數字，將其轉換為整數並添加到 sumArr 中
                $sumArr[]=intval($value);
            }else if($value == "+"){
                // "+" 表示將前兩個分數相加並加入 sumArr
                $count=count($sumArr);
                $sumArr[]=$sumArr[$count-1]+$sumArr[$count-2];
            }else if($value == "D"){
                // "D" 表示將上一個分數的兩倍加入 sumArr
                $count=count($sumArr);
                $sumArr[]=2*$sumArr[$count-1];
            }else if($value== "C"){
                // "C" 表示移除上一個分數
                array_pop($sumArr);
            }
        }
        // 返回 sumArr 的總和
        return array_sum($sumArr);
    }
}


?>