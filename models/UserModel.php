<?php
require_once __DIR__ . '/../core/Database.php';

class UserModel {
    private $db;

        public function __construct() {
                $this->db = new Database();
                    }

                        public function getAllUsers() {
                                return $this->db->get("SELECT * FROM users");
                                    }
                                    }