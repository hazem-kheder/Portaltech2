<?php
/**
 * Created by PhpStorm.
 * User: Pc
 * Date: 9/14/2016
 * Time: 05:55 م
 */

namespace Portaltech;


class TaskClass extends AbstractItems
{
    private $listID;

    public function __construct($listID)
    {
        $this->listID = $listID;
    }

    function getItems()
    {
        $db = $this->getPDO();

        $sql = $db->prepare("SELECT * FROM task WHERE 	list_id = :list_id LIMIT 0,20");
        $sql->execute(array('list_id'=>$this->listID));
        $ListArray = $sql->fetchAll(\PDO::FETCH_ASSOC);

        return $ListArray;
    }

    function getOneItem($id)
    {
        $db = $this->getPDO();

        $sql = $db->prepare("SELECT * FROM task WHERE list_id = :id");
        $sql->execute(array('id'=>$id));
        $ListArray = $sql->fetch(\PDO::FETCH_ASSOC);

        return $ListArray;
    }

    public function getListID()
    {
        return $this->listID;
    }
    function __call($name, $arguments)
    {
        // TODO: Implement __call() method.
    }


}