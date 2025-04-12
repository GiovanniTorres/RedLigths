<?php
class Database {
    private $conn;

        public function __construct() {
                $this->connect();
                    }

                        private function connect() {
                                try {
                                            $this->conn = new PDO(
                                                            'mysql:host=aws.connect.psdb.cloud;dbname=redlights;ssl_ca=' . __DIR__ . '/cacert.pem',
                                                                            '2mb1lpo9cqmpn4f45btd',
                                                                                            'pscale_pw_RLplrD0fHKF3l5lR5dCn4Yepqwdwkj86VZdqWTIc0fF',
                                                                                                            [
                                                                                                                                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                                                                                                                                                    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                                                                                                                                                                    ]
                                                                                                                                                                                );
                                                                                                                                                                                        } catch (PDOException $e) {
                                                                                                                                                                                                    die("Error de conexión: " . $e->getMessage());
                                                                                                                                                                                                            }
                                                                                                                                                                                                                }

                                                                                                                                                                                                                    public function getConnection() {
                                                                                                                                                                                                                            return $this->conn;
                                                                                                                                                                                                                                }
                                                                                                                                                                                                                                }