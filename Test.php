<?php
/**
 * Created by PhpStorm.
 * User: codingOliver
 * Date: 11/10/2017
 * Time: 10:35 PM
 */

    include ('LinkedList.php');

    $list = new LinkedList();


    // add items to the list
    $list->addNode(5);
    $list->addNode(10);
    $list->addNode(15);

    // add item at specified position in the list
    $list->insertAt(0, 30);


    // prints out items in the list
    $list->printValues();


