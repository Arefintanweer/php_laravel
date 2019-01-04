<?php 
//1
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

//2
class queue
{
    private $queue;
    private $head;
    private $tail;

    function __construct()
    {
        $this->queue = array();
        $this->head = 0;
        $this->tail = 0;
    }

    function enqueue($item)
    {
        return $this->queue[$this->tail++]=$item;
    }

    function dequeue()
    {
        return $this->queue[$this->head++];
    }
}

$queue = new queue();

$queue->enqueue(1);
$queue->enqueue(2);
echo $queue->dequeue()."\n";
$queue->enqueue(3);
$queue->enqueue(4);
$queue->enqueue(5);
echo $queue->dequeue()."\n";
echo $queue->dequeue()."\n";

//3 unsolved

//4
$stdin = fopen('php://stdin', 'r');
$stdout = fopen('php://stdout', 'w');

fscanf(STDIN, "%s\n", $word); 

$reverse = strrev($word);

if($word == $reverse)
{
    echo "Yes";
}
else
{
    echo "No";
}

//5
$factorial = 1;

for($i=1;$i<=15;$i++)
{
    $factorial = $factorial * $i;
}

echo $factorial;


