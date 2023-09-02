<?php

class DataDBconnection
{
    private $connection = null;

    private function __construct(){
        $this->connection = new PDO('pgsql:host=172.20.2.34;dbname=market', 'master', 'pas$wD',
                                    [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, PDO::ATTR_EMULATE_PREPARES => false]);
    }

    private function __clone(){}

    public function __wakeup()
    {
        throw new \http\Exception\BadMethodCallException();
    }


    private static $instance = null;

    public static function instance(): DataDBconnection{
        if(self::$instance === null){
            self::$instance = new DataDBconnection();
        }

        return self::$instance;
    }

    public static function connection(): PDO{
        return self::instance()->connection;
    }

    public static function prepare($query):PDOStatement{
        return self::connection()->prepare($query);
    }

    public static function lastInsertId(): int{
        return intval(self::connection()->lastInsertId());
    }
}