<?php
class LikeModel {
    private $db;

    public function __construct($conn) {
        $this->db = $conn;
    }

    public function addLike($userId, $projectId) {
        $stmt = $this->db->prepare("INSERT INTO likes (user_id, project_id) VALUES (?, ?)");
        return $stmt->execute([$userId, $projectId]);
    }

    public function countLikes($projectId) {
        $stmt = $this->db->prepare("SELECT COUNT(*) as total FROM likes WHERE project_id = ?");
        $stmt->execute([$projectId]);
        return $stmt->fetch(PDO::FETCH_ASSOC)['total'];
    }
}
