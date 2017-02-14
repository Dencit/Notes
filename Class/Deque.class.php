<?php
/* Created by User: soma Worker:陈鸿扬  Date: 17/2/14  Time: 12:42 */

//namespace Note;

class Deque {

    private $queue = array();
    public function addFirst($item){//头入队
        array_unshift($this->queue,$item);
    }
    public function addLast($item){//尾入队
        array_push($this->queue,$item);
    }
    public function removeFirst(){//头出队
        array_shift($this->queue);
    }
    public function removeLast(){//尾出队
        array_pop($this->queue);
    }
    public  function show(){//打印
        foreach($this->queue as $item){
            echo $item." ";
        }
        echo "<br/>";
    }

} 