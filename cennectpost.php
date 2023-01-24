<?php


/**
 * @property false|mysqli $connection1
 */
class DB1
{

    private $connection1 = null;

    public function __construct()
    {
        $this->connection1 = mysqli_connect('localhost', 'root', 'root');
        $select_db = mysqli_select_db($this->connection1, 'post');

    }

    public function getConnection1()
    {
        return $this->connection1;
    }
}

global $db1;
$db1 = new DB1();

