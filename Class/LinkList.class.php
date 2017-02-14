<?php
/* Created by User: soma Worker:陈鸿扬  Date: 17/2/14  Time: 11:36 */

//namespace Note;
//use \LinkNode as LinkNode;

class LinkList {

    //初始化
    function init($node){
        $node->data = 0; //用来记录链表长度
        $node->next = null;
    }

    //头插法创建链表
    function createHead(&$node,$length){
        for($i=0;$i<$length;$i++){
            $newNode = new LinkNode();
            $newNode->data = $i;
            $newNode->next = $node->next;//因为PHP中对象本身就是引用所以不用再引用“&”
            $node->next = $newNode;
            $node->data++;
        }
    }
    //尾插法创建链表
    function createTail(&$node,$length){
        $r = $node;
        for($i=0;$i<$length;$i++){
            $newNode = new LinkNode();
            $newNode->data = $i;
            $newNode->next = $r->next;
            $r->next = $newNode;
            $r = $newNode;
            $node->data++;
        }
    }
    //在指定位置插入指定元素
    function insert($node,$pos,$elem){
        if($pos<1 && $pos>$node->data+1){
            echo "插入位置错误！";
        }
        $p = $node;
        for($i=1;$i<$pos;$i++){
            $p = $p->next;
        }
        $newNode = new LinkNode();
        $newNode->data = $elem;
        $newNode->next = $p->next;
        $p->next = $newNode;
    }
    //删除指定位置的元素
    function delete($node,$pos){
        if($pos<1 && $pos>$node->data+1){
            echo "位置不存在！";
        }
        $p = $node;
        for($i=1;$i<$pos;$i++){
            $p = $p->next;
        }
        $q = $p->next;
        $p->next = $q->next;
        unset($q);
        $node->data--;
    }
    //输出链表数据
    function show($node){
        $p = $node->next;
        while($p!=null){
            echo $p->data." ";
            $p = $p->next;
        }
        echo '<br/>';
    }

}