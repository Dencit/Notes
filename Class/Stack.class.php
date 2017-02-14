<?php
/* Created by User: soma Worker:陈鸿扬  Date: 17/2/14  Time: 12:31 */

//namespace Note;

class Stack {


    //用默认值直接初始化栈了，也可用构造方法初始化栈
    private $top = -1;
    private $maxSize = 5;
    private $stack = array();

    function __construct($limit=null){
        if($limit){
            $this->maxSize = $limit;
        }else{
            $this->maxSize=5;
        }
    }

    //入栈
    function push($elem){
        if($this->top >= $this->maxSize-1){
            echo "栈已满！<br/>";
            return;
        }
        $this->top++;
        $this->stack[$this->top] = $elem;
    }
    //出栈
    function pop(){
        if($this->top == -1){
            echo "栈是空的！";
            return ;
        }
        $elem = $this->stack[$this->top];
        unset($this->stack[$this->top]);
        $this->top--;
        return $elem;
    }
    //打印栈
    function show(){
        for($i=$this->top;$i>=0;$i--){
            echo $this->stack[$i]." ";
        }
        echo "<br/>";
    }


} 