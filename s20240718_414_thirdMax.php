<?php
class Solution{
    // 定義一個函數 thirdMax，接受一個數組 $nums 作為參數
    function thirdMax($nums){
        // 使用 array_unique 去除數組中的重複值
        $nums=array_unique($nums);

        // 如果數組的元素個數少於 3 個
        if(count($nums)<3){
            // 返回數組中的最大值
            return max($nums);
        }else{
            // 將數組按降序排序
            rsort($nums);
            // 返回排序後的數組中的第三個元素
            return $nums[2];
        }
    }
}


?>