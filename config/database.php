<?php
class Database {
    private $conn;

        public function __construct() {
                $this->connect();
                    }

                        public function connect() {
                                try {
                                            $this->conn = new PDO(
                                                            'mysql:host=aws.connect.psdb.cloud;dbname=redlights',
                                                                            '2mb1lpo9cqmpn4f45btd',
                                                                                            'pscale_pw_RLplrD0fHKF3l5lR5dCn4Yepqwdwkj86VZdqWTIc0fF',
                                                                                                            [
                                                                                                                                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                                                                                                                                                    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                                                                                                                                                                        PDO::MYSQL_ATTR_SSL_VERIFY_SERVER_CERT => false,
                                                                                                                                                                                            PDO::MYSQL_ATTR_SSL_CA => __DIR__ . '/cacert.pem'
                                                                                                                                                                                                            ]
                                                                                                                                                                                                                        );
                                                                                                                                                                                                                                } catch (PDOException $e) {
                                                                                                                                                                                                                                            die("Error de conexión: " . $e->getMessage());
                                                                                                                                                                                                                                                    }

                                                                                                                                                                                                                                                            return $this->conn;
                                                                                                                                                                                                                                                                }

                                                                                                                                                                                                                                                                    public function getConnection() {
                                                                                                                                                                                                                                                                            return $this->conn;
                                                                                                                                                                                                                                                                                }
                                                                                                                                                                                                                                                                                }