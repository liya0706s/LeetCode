<?php
class Solution{
    // 定義一個函數 replaceElements，接收一個數組參數 $arr 
    function replaceElements($arr){
        // 初始化一個空數組 newArr，用來儲存結果
        $newArr=[];

        // 遍歷輸入數組 $arr，每次迭代提供當前索引 $index 和當前元素 $currentNum 
        foreach($arr as $index=>$currentNum){
            // 如果當前索引是是數組的最後一個元素
            if($index==(count($arr)-1)){
                // 將其新的數組 $newArr 值替換為 -1
                $newArr[]=-1;
            // 如果當前索引不是最後一個元素
            }else{
                // 取出該元素右邊的所有元素形成新的數組 $rightArr 
                $rightArr=array_slice($arr,$index+1);
                // 找出 $rightArr 數組中最大值
                $max=max($rightArr);
                // 將該最大值添加到結果數組 $newArr 中
                $newArr[]=$max;
            }
        }
        // 返回結果數組
        return $newArr;
    }
}

?>