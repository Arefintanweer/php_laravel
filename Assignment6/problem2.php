<?php
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
