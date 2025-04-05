<?php
require_once __DIR__ . '/../Core/Database.php';

class UserModel {
    private $db;

    public function __construct() {
        $database = new Database();
        $this->db = $database->getConnection();
    }

    public function getAll() {
        $stmt = $this->db->query("SELECT * FROM users");
        return $stmt->fetchAll();
    }

    public function getById($id) {
        $stmt = $this->db->prepare("SELECT * FROM users WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch();
    }

    public function create($data) {
        $stmt = $this->db->prepare("INSERT INTO users (username, email, password) VALUES (?, ?, ?)");
        return $stmt->execute([$data['username'], $data['email'], $data['password']]);
    }

    public function update($id, $data) {
        $stmt = $this->db->prepare("UPDATE users SET username = ?, email = ?, password = ? WHERE id = ?");
        return $stmt->execute([$data['username'], $data['email'], $data['password'], $id]);
    }

    public function delete($id) {
        $stmt = $this->db->prepare("DELETE FROM users WHERE id = ?");
        return $stmt->execute([$id]);
    }
}
