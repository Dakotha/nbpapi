<?php

class Database
{
    private $connection;
    private $statement;

    public function __construct($config)
    {
        $dsn = 'mysql:' . http_build_query($config, '', ';');

        try {    
            $this->connection = new PDO($dsn, null, null, [
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
            ]);
        } catch(PDOException $e) {
            exit($e->getMessage());
        }
    }

    public function query($query, $params = [])
    {
        $this->statement = $this->connection->prepare($query);

        try {
            $this->statement->execute($params);
        } catch (PDOException $e) {
            exit($e->getMessage());
        }

        return $this->statement;
    }

    public function truncate($table)
    {
        $this->statement = $this->connection->prepare("TRUNCATE TABLE {$table}");

        try {
            $this->statement->execute();
        } catch (PDOException $e) {
            exit($e->getMessage());
        }
    }
}
