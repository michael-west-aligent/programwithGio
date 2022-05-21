<?php

namespace App;

///** Implement iterator interface */
//class InvoiceCollection implements  \Iterator
//{
//
//    public function __construct(public array $invoices)
//    {
//    }
//
////Returns current the current element
//    public function current()
//    {
//        echo __METHOD__ . PHP_EOL;
//return current($this->invoices);
//    }
//
//    //next - should bring internal pointer to the next element
//    public function next()
//    {
//        echo __METHOD__ . PHP_EOL;
//         next($this->invoices);
//    }
//
//    //key - return the key of the current of an array
//    public function key()
//    {
//        echo __METHOD__ . PHP_EOL;
//return key($this->invoices);
//    }
//
//    //valid - checks if the current position is valid, if false foreach will stop
//    public function valid()
//    {
//        echo __METHOD__ . PHP_EOL;
//
//        return current($this->invoices) !== false;
//    }
//
//    //rewind - gets called at begining of foreach loop. Needs to reset array pointer back to start .
//    public function rewind()
//    {
//        echo __METHOD__ . PHP_EOL;
//
//        reset($this->invoices);    }
//
//}

/** INSTEAD OF THE ABOVE WE CAN ALSO USE THE BUILT IN ITERATOR AGGREATE FROM PHP  */

class InvoiceCollection implements \IteratorAggregate
{
     private int $key;

    public function __construct(public array $invoices)
    {

    }

    public function getIterator()
    {
        return new \ArrayIterator($this->invoices);

            }
}