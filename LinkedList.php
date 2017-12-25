<?php

/**
 * Created by PhpStorm.
 * User: codingOliver
 * Date: 11/10/2017
 * Time: 3:53 PM
 */

include ('Node.php');

class LinkedList
{

    /**
     * @var reference to the top node in the list
     */
    private $topNode;


    /**
     * @var reference to the current node in the list
     */
    private $currentNode;


    /**
     * @var holds the size of the list
     */
    private $size = 0;


    /**
     * @param $item adds an item to the list
     */
    public function addNode($item)
    {
        // create the top node
        if($this->size == 0)
        {
            $this->topNode = new Node();
            $this->topNode->value = $item;

            $this->currentNode = $this->topNode;
        }
        else // create new node and add to list
        {
            $this->addNodeAtLast($item);
        }

        // increase size of list
        $this->size ++;
    }


    /**
     * @param $item item to be added to the list
     */
    private function addNodeAtLast($item)
    {
        $node = new Node();
        $node->value = $item;

        // let current node point to the new node
        $this->currentNode->next = $node;

        // set current node to the new node
        $this->currentNode = $node;
    }


    /**
     * @param $index position to insert item
     * @param $item item to be added
     */
    public function insertAt($index, $item)
    {

        // insert as top node
        if($index == 0)
        {
            $node = new Node();
            $node->value = $item;

            // set this new node to point to the node the top was pointing to
            $node->next = $this->topNode;

            // set top to point to this new node
            $this->topNode = $node;
        }
        // add node at end of list
        else if($index == $this->size)
        {
            $this->addNodeAtLast($item);
        }
        // insert at specified position
        else if($index <= $this->size)
        {

            $node = new Node();
            $node->value = $item;

            // set new current node to point to top
            $currNode = $this->topNode;

            for($i = 1; $i < $index; $i++)
            {
                $currNode = $currNode->next;
            }

            // set the new node to point to the next item
            $node->next = $currNode->next;

            // set new current node to point to the new node created
            $currNode->next = $node;
        }
        else // array index out of bounds
        {
            die('ArrayIndexOutOfBounds, Size : '.$this->size . ', Index : '.$index);
        }

        // increase size of list
        $this->size ++;
    }




    public function remove($item)
    {

        // set new current node to reference the top node
        $currNode = $this->topNode;

    }





    /**
     * prints all the values in the list
     */
    public function printValues()
    {
        $this->currentNode = $this->topNode;
        while($this->currentNode != null)
        {
            echo $this->currentNode->value. "</br>";
            $this->currentNode = $this->currentNode->next;
        }
    }



}