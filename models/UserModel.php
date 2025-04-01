<?php
require_once __DIR__ . '/../config/Database.php';

class UserModel {
    private $conn;
        private $table = "users";

            public function __construct() {
                    $this->conn = Database::getInstance();
                        }

                            public function createUser($name, $email, $password) {
                                    $hashedPassword = password_hash($password, PASSWORD_BCRYPT);
                                            $sql = "INSERT INTO {$this->table} (name, email, password) VALUES (:name, :email, :password)";
                                                    $stmt = $this->conn->prepare($sql);
                                                            return $stmt->execute([
                                                                        ':name' => $name,
                                                                                    ':email' => $email,
                                                                                                ':password' => $hashedPassword
                                                                                                        ]);
                                                                                                            }

                                                                                                                public function getUserByEmail($email) {
                                                                                                                        $sql = "SELECT * FROM {$this->table} WHERE email = :email";
                                                                                                                                $stmt = $this->conn->prepare($sql);
                                                                                                                                        $stmt->execute([':email' => $email]);
                                                                                                                                                return $stmt->fetch(PDO::FETCH_ASSOC);
                                                                                                                                                    }
                                                                                                                                                    }
                                                                                                                                                    ?>