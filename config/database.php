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
        try {
            $dsn = "mysql:host=$this->host;dbname=$this->database;sslmode=require";
            $options = [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::MYSQL_ATTR_SSL_VERIFY_SERVER_CERT => false,
                PDO::MYSQL_ATTR_SSL_CA => __DIR__ . '/cacert.pem'
            ];

            $this->conn = new PDO($dsn, $this->username, $this->password, $options);
        } catch (PDOException $e) {
            die("Error de conexión: " . $e->getMessage());
        }

        return $this->conn;
    }
}
