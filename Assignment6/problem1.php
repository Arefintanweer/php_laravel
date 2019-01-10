<?php 
//1 Stack
class stack
{
    private $stack;
    private $index;

    function __construct()
    {
        $this->stack = array();
        $this->index = 0;
    }

    function push($item)
    {
        return $this->stack[$this->index++]=$item;
    }

    function pop()
    {
        return $this->stack[--$this->index];
    }

}

$stack = new stack();

$stack->push(1);
$stack->push(2);
$stack->push(3);
$stack->push(4);
echo $stack->pop()."\n";
echo $stack->pop()."\n";
//echo $stack->pop()."\n";
//echo $stack->pop()."\n";