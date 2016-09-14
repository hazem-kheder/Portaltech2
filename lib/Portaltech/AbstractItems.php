<?php

namespace Portaltech;


abstract class AbstractItems
{
    const DSN = "mysql:host=localhost;dbname=portaltech";
    const USERNAME = "root";
    const PASSWORD ="";

    private $id;
    private $pdo;

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

    /**
     * @return \PDO
     */
    public function getPDO()
    {
        if($this->pdo === null)
        {
            $this->pdo = new \PDO(self::DSN, self::USERNAME, self::PASSWORD);
            $this->pdo->setAttribute(\PDO::ATTR_ERRMODE , \PDO::ERRMODE_EXCEPTION);
        }
        return $this->pdo;
    }



}