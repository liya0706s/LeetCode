<?php
class TreeNode{
    public $val=null;  // 節點的值
    public $left=null;  // 左子節點
    public $right=null;  // 右子節點

    // TreeNode 類的建構子，用於初始化節點
    public function __construct($value=0, $left=null, $right=null){
        $this->val=$value;
        $this->left=$left;
        $this->right=$right;
    }
}

// 定義解決方案類(Solution)
class Solution{
    // 計算所有左葉子節點的和
    public function sumOfLeftLeaves($root){
        // 如果根節點為 null，返回0
        if($root==null){
            return 0;
        }
        $sum=0;  // 初始化左葉子節點的和為0

        // 如果左子節點不為 null，且左子節點是葉子節點，將左子節點的值加到 sum 
        if($root->left!=null && $root->isLeaf($root->left)) {
            $sum+=$root->left->val;
        }

        // 遞歸計算左子樹和右子樹中的左葉子節點的和，並加到sum中
        return $sum+$this->sumOfLeftLeaves($root->left)+$this->sumOfLeftLeaves($root->right);

        // 檢查一個節點是否為葉子節點(即沒有左子節點和右子節點)
       
        
    }
}


?>