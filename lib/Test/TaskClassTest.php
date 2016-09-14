<?php
/**
 * Created by PhpStorm.
 * User: Pc
 * Date: 9/14/2016
 * Time: 06:48 م
 */

namespace Test;

use Portaltech\TaskClass;
class TaskClassTest extends \PHPUnit_Framework_TestCase
{
    public function testGetItemsIfReturnsArray()
    {
        $tasks = new TaskClass(1);

        $tasksArray = $tasks->getItems();
        $this->assertInternalType('array', $tasksArray);

    }

    public function testGetOneItemIfReturnsArray()
    {
        $task =  new TaskClass(1);

        $taskArray = $task->getOneItem(1);
        $this->assertInternalType('array', $taskArray);
    }

}