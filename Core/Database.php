<?php

namespace Core;

use PDO;

class Database
{
    private $connection;
    private $statement;
    private $username;
    private $password;
    public function __construct($config)
    {
        $dsn = "mysql:" . http_build_query($config, "", ";");

        $this->username = $_ENV["DB_USER"];
        $this->password = $_ENV["DB_PASS"];

        $this->connection = new PDO($dsn, $this->username, $this->password, [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]);
    }

    public function query($query, $params = [])
    {
        try {
            $this->statement = $this->connection->prepare(($query));
            $this->statement->execute($params);
            return $this;
        } catch (\PDOException $e) {
            echo $e->getMessage();
        }
    }

    public function getAll()
    {
        return $this->statement->fetchAll();
    }
    public function getColumn()
    {
        return $this->statement->fetchAll(PDO::FETCH_COLUMN);
    }

    public function find()
    {
        return $this->statement->fetch();
    }

    public function findOrFail()
    {
        $result = $this->find();

        if (!$result) {
            abort();
        }

        return $result;
    }
    public function last_inserted_id()
    {
        return $this->connection->lastInsertId();
    }
    public function quote($value)
    {
        return $this->connection->quote($value);
    }
}
