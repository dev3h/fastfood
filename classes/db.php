<?php
 
class Database
{
    static $instance = null;
    private $connection;
 
    private function __construct()
    {
        $host = 'localhost';
        $username = 'root';
        $password = '';
        $database = 'fastfood';
        $this->connection = new \mysqli($host, $username, $password, $database);
    }
 
    public static function getInstance()
    {
        if (static::$instance == null) {
            static::$instance = new Database();
        }
         
        return static::$instance;
    }

     public function query($sql) {
        return $this->connection->query($sql);
    }
}