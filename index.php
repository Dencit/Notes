<?php
/* Created by User: soma Worker:陈鸿扬  Date: 17/2/14  Time: 10:08 */



header("content-type:text/html;charset=utf-8");
$arr = array(3,5,8,4,9,6,1,7,2);
echo implode(" ",$arr)."<br/>";



//---------------------------------------
//常用排序算法
require_once('Class/Sort.class.php'); //use Note\Sort as Sort;
//---------------------------------------

echo '冒泡排序：';
echo implode(' ',Sort::BubbleSort($arr))."<br/>";


echo "选择排序：";
echo implode(' ',Sort::SelectSort($arr))."<br/>";


echo '插入排序：';
echo implode(' ',Sort::InsertSort($arr))."<br/>";


echo "快速排序：";
echo implode(' ',Sort::QSort($arr))."<br/>";


//---------------------------------------
//              常用查找算法
require_once('Class/Search.class.php'); //use Note\Search as Search;
//---------------------------------------

$key = 6;
echo "二分查找{$key}的位置：";
echo Search::binary_search(Sort::QSort($arr),0,8,$key);


$key = 8;
echo "<br/>顺序常规查找{$key}的位置：";
echo Search::SqSearch($arr,$key);


//---------------------------------------
//              常用数据结构
require_once('Class/Structure.class.php'); //use Note\Structure as Structure;
//---------------------------------------

/**
 * 线性表的删除(数组实现)
 */
$pos = 3;
echo "<br/>除第{$pos}位置上的元素后：";
echo implode(' ',Structure::delete_array_element($arr,$pos))."<br/>";


/**
 * Class Node
 * PHP模拟链表的基本操作
 */
require_once('Class/LinkNode.class.php'); //use Note\LinkNode as LinkNode;
require_once('Class/LinkList.class.php'); //use Note\LinkList as LinkList;

$node = new LinkNode();
$list = new LinkList();

$list->init($node);//初始化
$list->createTail($node,10);//尾插法创建链表
$list->show($node);//打印出链表

$list->insert($node,3,'a');//插入
$list->show($node);

$list->delete($node,3);//删除
$list->show($node);


/**
 * Class Stack
 * 用PHP模拟顺序栈的基本操作
 */
require_once('Class/Stack.class.php'); //use Note\Stack as Stack;

$stack = new Stack();

$stack->push(3);
$stack->push(5);
$stack->push(8);
$stack->push(7);
$stack->push(9);
$stack->push(2);
$stack->show();

$stack->pop();
$stack->pop();
$stack->pop();
$stack->show();


/**
 * Class Deque
 * 使用PHP实现双向队列
 */
require_once('Class/Deque.class.php'); //use Note\Deque as Deque;

$deque = new Deque();
$deque->addFirst(2);
$deque->addLast(3);
$deque->addLast(4);
$deque->addFirst(5);
$deque->show();


/**
 * PHP解决约瑟夫环问题
 */
require_once('Class/Joseph.class.php'); //use Note\Joseph as Joseph;

$Joseph=new Joseph();

echo "<br/>".$Joseph->joseph_ring(60,5)."<br/>";
echo "<br/>".$Joseph->joseph_ring2(60,5)."<br/>";




/**
 * PHP模拟哈希表
 */
require_once('Class/hashTable.class.php'); //use Note\hashTable as hashTable;

$list = new hashTable(200);
$list->set("zero", "zero compare");
$list->set("one", "first test");
$list->set("two", "second test");
$list->set("three", "three test");
$list->set("four", "fouth test");
$list->val();

echo "after sorted : <br />";
$list->rev(3);













