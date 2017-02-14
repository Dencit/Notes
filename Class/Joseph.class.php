<?php
/* Created by User: soma Worker:陈鸿扬  Date: 17/2/14  Time: 12:45 */

class Joseph {

//PHP解决约瑟夫环问题

//方法一
    function joseph_ring($n,$m){
        $arr = range(1,$n);
        $i = 0;
        while(count($arr)>1){
            $i=$i+1;
            $head = array_shift($arr);
            if($i%$m != 0){ //如果不是则重新压入数组
                array_push($arr,$head);
            }
        }
        return $arr[0];
    }

//方法二
    function joseph_ring2($n,$m){
        $r = 0;
        for($i=2;$i<=$n;$i++){
            $r = ($r+$m)%$i;
        }
        return $r + 1;
    }


} 