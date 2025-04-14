<?php
class ProjectModel {
    private $db;

    public function __construct($conn) {
        $this->db = $conn;
    }

    public function createProject($userId, $title, $description) {
        $stmt = $this->db->prepare("INSERT INTO projects (user_id, title, description) VALUES (?, ?, ?)");
        return $stmt->execute([$userId, $title, $description]);
    }

    public function getAllProjects() {
        $stmt = $this->db->query("SELECT * FROM projects");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getProjectsByUser($userId) {
        $stmt = $this->db->prepare("SELECT * FROM projects WHERE user_id = ?");
        $stmt->execute([$userId]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
