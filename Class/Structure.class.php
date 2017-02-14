<?php
/* Created by User: soma Worker:陈鸿扬  Date: 17/2/14  Time: 11:13 */

//namespace Note;

class Structure {

    //线性表的删除(数组实现)
    static function delete_array_element($arr,$pos){
        $length = count($arr);
        if($pos<1 || $pos>$length){
            return "删除位置出错!";
        }
        for($i=$pos-1;$i<$length-1;$i++){
            $arr[$i] = $arr[$i+1];
        }
        array_pop($arr);
        return $arr;
    }



} 