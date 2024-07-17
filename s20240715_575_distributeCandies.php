<?php
class Solution {
    // 定義一個方法 distributeCandies，接收一個包含糖果種類的陣列 $candyType
    function distributeCandies($candyType){
        // 計算最多能分配給一個人的糖果數量，為總糖果數量的一半
        $maxCandies=count($candyType)/2;

        // 使用 array_unique 函數移除陣列中重複的糖果種類，得到一個只包含唯一糖果種類的陣列
        $candyTypeUnique=array_unique($candyType);

        // 計算唯一糖果種類的數量
        $numberOfTypes=count($candyTypeUnique);

        // 如果唯一糖果種類的數量小於或等於最多能分配的糖果數量，則返回唯一糖果種類的數量
        if($numberOfTypes<= $maxCandies){
            return $numberOfTypes;
        } else{
            // 否則，返回最多能分配的糖果數量
            return $maxCandies;
        }
    }
}

$candyType=[1,1,2,2,3,3];  // 糖果總數是6
$solution= new Solution();  
// 最多可以得到一半的糖果，也就是6/2=3個糖果
// 陣列中唯一
echo $solution->distributeCandies($candyType);  // 輸出:3





?>