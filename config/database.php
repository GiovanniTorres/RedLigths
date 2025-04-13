<?php
class Database {
    private $conn;

    public function __construct($driver = 'sqlite') {
        $this->connect($driver);
    }

    private function connect($driver) {
        try {
            if ($driver === 'mysql') {
                $this->conn = new PDO(
                    'mysql:host=localhost;dbname=redlights',
                    'root',
                    '',
                    [
                        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
                    ]
                );
            } else {
                $this->conn = new PDO('sqlite:' . __DIR__ . '/../local.db');
                $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            }
        } catch (PDOException $e) {
            die("Error de conexión: " . $e->getMessage());
        }
    }

    public function getConnection() {
        return $this->conn;
    }
}
