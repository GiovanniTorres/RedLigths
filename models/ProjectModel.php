<?php
require_once __DIR__ . '/../config/Database.php';

class ProjectModel {
    private $conn;
        private $table = "projects";

            public function __construct() {
                    $this->conn = Database::getInstance();
                        }

                            public function createProject($user_id, $title, $description, $url, $image) {
                                    $sql = "INSERT INTO {$this->table} (user_id, title, description, url, image) VALUES (:user_id, :title, :description, :url, :image)";
                                            $stmt = $this->conn->prepare($sql);
                                                    return $stmt->execute([
                                                                ':user_id' => $user_id,
                                                                            ':title' => $title,
                                                                                        ':description' => $description,
                                                                                                    ':url' => $url,
                                                                                                                ':image' => $image
                                                                                                                        ]);
                                                                                                                            }

                                                                                                                                public function getProjectsByUser($user_id) {
                                                                                                                                        $sql = "SELECT * FROM {$this->table} WHERE user_id = :user_id";
                                                                                                                                                $stmt = $this->conn->prepare($sql);
                                                                                                                                                        $stmt->execute([':user_id' => $user_id]);
                                                                                                                                                                return $stmt->fetchAll(PDO::FETCH_ASSOC);
                                                                                                                                                                    }
                                                                                                                                                                    }
                                                                                                                                                                    ?>