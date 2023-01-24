<?php

/**
 * @property false|mysqli $connection
 */
class DB {

    private $connection = null;

    public function __construct()
    {
        $this->connection = mysqli_connect('localhost', 'root', 'root');
        $select_db = mysqli_select_db($this->connection, 'proiect');

    }

    public function getConnection()
    {
        return $this->connection;
    }
}

global $db;
$db = new DB();

