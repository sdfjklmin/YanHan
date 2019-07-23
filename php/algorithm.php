<?php

    /** 冒泡
     * @param $arr
     * @return mixed
     */
    function bubbleSort($arr)
    {
        //按照大小顺序一个一个地像气泡一样浮出水面
        //可以从左到右依次冒泡，把较大的数往右边挪动即可
        //最坏的情况的情况下，需要进行 n*(n-1)/2 次比较
        $count = count($arr);
        for ($i = 0; $i < $count; $i++) {
            for ($j = $i; $j < $count-1; $j++) {
                //左边大于右边
                if ($arr[$i] > $arr[$j+1]) {
                    //交换两者的位置
                    $temp      = $arr[$i];
                    $arr[$i]   = $arr[$j+1];
                    $arr[$j+1] = $temp;
                }
            }
        }
        return $arr;
    }


    /** 插入排序
     * @param $arr
     * @return mixed
     */
    function insertSort($arr)
    {
        //不断地将尚未排好序的数插入到已经排好序的部分。
        //获取需要排序的长度
        //最坏的情况的情况下，需要进行 n*(n-1)/2 次比较
        $length=count($arr);
        //假定第一个为有序的，所以从$i开始比较
        for ($i=1; $i <$length ; $i++) {
            //存放待比较的值
            $tmp=$arr[$i];
            for($j=$i-1;$j>=0;$j--){
                //若插入值比较小，则将后面的元素后移一位，并将值插入
                if($tmp<$arr[$j]){
                    $arr[$j+1]=$arr[$j];
                    $arr[$j]=$tmp;
                }else{
                    break;
                }
            }
        }
        return $arr;
    }
    
    
        /** 快速排序
     * @param $arr
     * @return array
     */
    function quickSort($arr)
    {
        //选取一个数值作为基数,把数据划分为左右两组数据,最后合并左中右的数据
        $count = count($arr);
        if($count <= 1) {
            return $arr;
        }
        $init  = $arr[0];
        $left  = [];
        $right = [];
        for ($i=1; $i<$count; $i++) {
            if($arr[$i] > $init) {
                $right[] = $arr[$i];
            }else{
                $left[]  = $arr[$i] ;
            }
        }
        $left  = $this->quickSort($left);
        $right = $this->quickSort($right);
        return array_merge($left,[$init],$right);
    }

    /**
     * @foreword 拓扑排序应用的场合不再是一个简单的数组,
     * 它研究的是图论里面顶点和顶点连线之间的性质,拓扑排序就是要将这些顶点按照相连的性质进行排序,
     * 前提为有向无环图
     * @extend 首先将问题用一个有向无环图（DAG, Directed Acyclic Graph）进行抽象表达,定义出哪些是图的顶点,顶点之间如何互相关联.
     * 接下来,可以利用广度优先搜索或深度优先搜索来进行拓扑排序.
     * 利用广度优先搜索的思想比较直观易懂,下面我们就以一道简单的例题来学习如何对一个有向无环图进行拓扑排序.
     */
    function topologySort()
    {
        /*有一个学生想要修完5门课程的学分，这5门课程分别用1、2、3、4、5来表示，现在已知学习这些课程有如下的要求：
            课程2和4依赖于课程1
            课程3依赖于课程2和4
            课程4依赖于课程1和2
            课程5依赖于课程3和4
        那么这个学生应该按照怎样的顺序来学习这5门课程呢？
        解题思路：
            可以把5门课程看成是一个图里的5个顶点，用有向线段按照它们的相互关系连起来，这个有向图里没有环，无论从哪个顶点出发，都不会再回到那个顶点。
            并且，这个图里并没有孤岛的出现，因此，我们可以对它进行拓扑排序，可以绘制顶点图，这里以依赖关系展示
                课程2和4依赖于课程1      1->4 , 1->2
                课程3依赖于课程2和4      2->3 , 4->3
                课程4依赖于课程1和2      1->4 , 2->4
                课程5依赖于课程3和4      3->5 , 4->5
            提取依赖关系
                1->4->3->5
                1->2->3->5
                2->4
            结果为： 1,2,4,3,5
            一般来说,一个有向无环图可以有一个或多个拓扑排序的序列
        */
    }