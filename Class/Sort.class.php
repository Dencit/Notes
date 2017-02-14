<?php
/* Created by User: soma Worker:陈鸿扬  Date: 17/2/14  Time: 10:05 */

//namespace Note;


class Sort {


//冒泡排序
    static function BubbleSort($arr){
        $length = count($arr);
        if($length<=1){
            return $arr;
        }
        for($i=0;$i<$length;$i++){
            for($j=$length-1;$j>$i;$j--){
                if($arr[$j]<$arr[$j-1]){
                    $tmp = $arr[$j];
                    $arr[$j] = $arr[$j-1];
                    $arr[$j-1] = $tmp;
                }
            }
        }
        return $arr;
    }

//选择排序(不稳定)
    static function SelectSort($arr){
        $length = count($arr);
        if($length<=1){
            return $arr;
        }
        for($i=0;$i<$length;$i++){
            $min = $i;
            for($j=$i+1;$j<$length;$j++){
                if($arr[$j]<$arr[$min]){
                    $min = $j;
                }
            }
            if($i != $min){
                $tmp = $arr[$i];
                $arr[$i] = $arr[$min];
                $arr[$min] = $tmp;
            }
        }
        return $arr;
    }

//插入排序
    static function InsertSort($arr){
        $length = count($arr);
        if($length <=1){
            return $arr;
        }
        for($i=1;$i<$length;$i++){
            $x = $arr[$i];
            $j = $i-1;
            while($x<$arr[$j] && $j>=0){
                $arr[$j+1] = $arr[$j];
                $j--;
            }
            $arr[$j+1] = $x;
        }
        return $arr;
    }

//快速排序
    static function QSort($arr){
        $length = count($arr);
        if($length <=1){
            return $arr;
        }
        $pivot = $arr[0];//枢轴
        $left_arr = array();
        $right_arr = array();
        for($i=1;$i<$length;$i++){//注意$i从1开始0是枢轴
            if($arr[$i]<=$pivot){
                $left_arr[] = $arr[$i];
            }else{
                $right_arr[] = $arr[$i];
            }
        }
        $left_arr = self::QSort($left_arr);//递归排序左半部分
        $right_arr = self::QSort($right_arr);//递归排序右半部份
        return array_merge($left_arr,array($pivot),$right_arr);//合并左半部分、枢轴、右半部分
    }


} 