<?php
/* Created by User: soma Worker:陈鸿扬  Date: 17/2/14  Time: 14:23 */

//namespace Note;

class MergeSort {

//归并算法总函数
    function __construct(array &$arr){
        $start = 0;
        $end = count($arr) - 1;
        $this->MSort($arr,$start,$end);
    }

    function MSort(array &$arr,$start,$end){
        //当子序列长度为1时，$start == $end，不用再分组
        if($start < $end){
            $mid = floor(($start + $end) / 2);	    //将 $arr 平分为 $arr[$start - $mid] 和 $arr[$mid+1 - $end]
            $this->MSort($arr,$start,$mid);			//将 $arr[$start - $mid] 归并为有序的$arr[$start - $mid]
            $this->MSort($arr,$mid + 1,$end);		//将 $arr[$mid+1 - $end] 归并为有序的 $arr[$mid+1 - $end]
            $this->Merge($arr,$start,$mid,$end);    //将$arr[$start - $mid]部分和$arr[$mid+1 - $end]部分合并起来成为有序的$arr[$start - $end]
        }
    }

//交换函数
    function swap(array &$arr,$a,$b){
        $temp = $arr[$a];
        $arr[$a] = $arr[$b];
        $arr[$b] = $temp;
    }

//归并操作
    function Merge(array &$arr,$start,$mid,$end){
        $i = $start;
        $j=$mid + 1;
        $k = $start;
        $tempArr = array();

        while($i!=$mid+1 && $j!=$end+1)
        {
            if($arr[$i] >= $arr[$j]){
                $tempArr[$k++] = $arr[$j++];
            }
            else{
                $tempArr[$k++] = $arr[$i++];
            }
        }

        //将第一个子序列的剩余部分添加到已经排好序的 $tempArr 数组中
        while($i != $mid+1){
            $tempArr[$k++] = $arr[$i++];
        }
        //将第二个子序列的剩余部分添加到已经排好序的 $tempArr 数组中
        while($j != $end+1){
            $tempArr[$k++] = $arr[$j++];
        }
        for($i=$start; $i<=$end; $i++){
            $arr[$i] = $tempArr[$i];
        }
    }

} 