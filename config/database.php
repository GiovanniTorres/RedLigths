<?php
class Database {
    private $host = 'aws.connect.psdb.cloud';
    private $username = '2mb1lpo9cqmpn4f45btd';
    private $password = 'pscale_pw_RLplrD0fHKF3l5lR5dCn4Yepqwdwkj86VZdqWTIc0fF';
    private $database = 'redlights';
    public $conn;

    public function __construct() {
        $this->connect();
    }

    public function connect() {
        $this->conn = new mysqli(
            $this->host,
            $this->username,
            $this->password,
            $this->database
        );

        if ($this->conn->connect_error) {
            die("Error de conexión: " . $this->conn->connect_error);
        }

        return $this->conn;
    }
}
