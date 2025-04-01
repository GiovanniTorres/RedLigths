<?php
class Database {
    private static $instance = null;
        private $conn;

            private $host = "localhost";
                private $db_name = "escentialcore";
                    private $username = "root";
                        private $password = "root";

                            private function __construct() {
                                    try {
                                                $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
                                                            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                                                                    } catch (PDOException $exception) {
                                                                                die("Error de conexión: " . $exception->getMessage());
                                                                                        }
                                                                                            }

                                                                                                public static function getInstance() {
                                                                                                        if (!self::$instance) {
                                                                                                                    self::$instance = new Database();
                                                                                                                            }
                                                                                                                                    return self::$instance->conn;
                                                                                                                                        }
                                                                                                                                        }
                                                                                                                                        ?>