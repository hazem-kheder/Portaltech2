<?php

namespace Test;

use Portaltech\ListClass;
class ListClassTest extends \PHPUnit_Framework_TestCase
{
    public function testGetItemsIfReturnsArray()
    {
        $lists = new ListClass();

        $listsArray = $lists->getItems();
        $this->assertInternalType('array', $listsArray);

    }

    public function testGetOneItemIfReturnsArray()
    {
        $list = new ListClass();

        $listArray = $list->getOneItem(1);
        $this->assertInternalType('array', $listArray);
    }

}