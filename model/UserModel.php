<?php
class UserModel {
    private $conn;

        public function __construct($db) {
                $this->conn = $db;
                    }

                        public function create($name) {
                                $stmt = $this->conn->prepare("INSERT INTO users (name) VALUES (?)");
                                        return $stmt->execute([$name]);
                                            }

                                                public function getAll() {
                                                        $stmt = $this->conn->query("SELECT * FROM users");
                                                                return $stmt->fetchAll();
                                                                    }
                                                                    }