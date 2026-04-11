<?php

class Database
{
    private $host;
    private $username;
    private $password;
    private $database;
    private $connection;

    public function __construct()
    {
        $isLocal = ($_SERVER['REMOTE_ADDR'] === '127.0.0.1' || $_SERVER['SERVER_NAME'] === 'localhost');

        if ($isLocal) {
            $this->host = '127.0.0.1';
            $this->username = 'root';
            $this->password = '';
            $this->database = 'codeoner';
        } else {
            $this->host = $_ENV['DB_HOST'];
            $this->username = $_ENV['DB_USERNAME'];
            $this->password = $_ENV['DB_PASSWORD'];
            $this->database = $_ENV['DB_NAME'];
        }
    }

    public function connect()
    {
        try {
            $this->connection = new mysqli(
                $this->host,
                $this->username,
                $this->password,
                $this->database
            );

            if ($this->connection->connect_error) {
                throw new Exception("Connection failed: " . $this->connection->connect_error);
            }

            $this->connection->set_charset("utf8mb4");
            return $this->connection;
        } catch (Exception $e) {
            error_log("Database connection error: " . $e->getMessage());
            throw new Exception("Database connection failed");
        }
    }

    public function getConnection()
    {
        if (!$this->connection) {
            return $this->connect();
        }
        return $this->connection;
    }

    public function close()
    {
        if ($this->connection) {
            $this->connection->close();
        }
    }
}
