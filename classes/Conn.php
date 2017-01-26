<?php

class Conn implements IConn
{

    private $host;
    private $dbname;
    private $user;
    private $pass;

    public function __construct($host = null, $dbname = null, $user = null, $pass = null)
    {
        $this->host = defined('HOSTNAME') ? HOSTNAME : $this->host;
        $this->dbname = defined('DB_NAME') ? DB_NAME : $this->dbname;
        $this->user = defined('DB_USER') ? DB_USER : $this->user;
        $this->pass = defined('DB_PASSWORD') ? DB_PASSWORD : $this->pass;
    }

    public function connect()
    {
        try {
            return new \PDO(
                    "mysql:host={$this->host};dbname={$this->dbname}", $this->user, $this->pass
            );
        } catch (\PDOException $e) {
            echo "Error! Message:" . $e->getMessage() . " Code:" . $e->getCode();
            exit;
        }
    }

}
