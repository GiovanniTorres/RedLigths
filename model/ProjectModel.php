<?php
class ProjectModel {
    private $conn;

        public function __construct($db) {
                $this->conn = $db;
                    }

                        public function create($user_id, $title) {
                                $stmt = $this->conn->prepare("INSERT INTO projects (user_id, title) VALUES (?, ?)");
                                        return $stmt->execute([$user_id, $title]);
                                            }

                                                public function getAll() {
                                                        $stmt = $this->conn->query("SELECT * FROM projects");
                                                                return $stmt->fetchAll();
                                                                    }
                                                                    }