<?php

namespace Portaltech;


class ListClass extends AbstractItems
{

    /**
     * @return array
     */
    function getItems()
    {
        $db = $this->getPDO();

        $sql = $db->prepare("SELECT * FROM list LIMIT 0,20");
        $sql->execute();
        $ListArray = $sql->fetchAll(\PDO::FETCH_ASSOC);

        return $ListArray;

    }


    function getOneItem($id)
    {
        $db = $this->getPDO();

        $sql = $db->prepare("SELECT * FROM list WHERE id = :id");
        $sql->execute(array('id'=>$id));
        $ListArray = $sql->fetch(\PDO::FETCH_ASSOC);

        return $ListArray;
    }

    function __call($name, $arguments)
    {
        // TODO: Implement __call() method.
    }


}