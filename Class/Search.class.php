<?php
/* Created by User: soma Worker:陈鸿扬  Date: 17/2/14  Time: 10:22 */

//namespace Note;

class Search {

//二分查找
    static function binary_search($arr,$low,$high,$key){
        while($low<=$high){
            $mid = intval(($low+$high)/2);
            if($key == $arr[$mid]){
                return $mid+1;
            }elseif($key<$arr[$mid]){
                $high = $mid-1;
            }elseif($key>$arr[$mid]){
                $low = $mid+1;
            }
        }
        return -1;
    }


//顺序查找
    static function SqSearch($arr,$key){
        $length = count($arr);
        for($i=0;$i<$length;$i++){
            if($key == $arr[$i]){
                return $i+1;
            }
        }
        return -1;
    }




} 