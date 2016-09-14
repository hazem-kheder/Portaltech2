<?php

namespace Portaltech;


abstract class AbstractItems
{
    private $id;

    abstract function getItems();

    abstract function getOneItem($id);

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }



}