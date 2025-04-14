<?php
class CommentModel {
    private $db;

    public function __construct($conn) {
        $this->db = $conn;
    }

    public function createComment($userId, $projectId, $content) {
        $stmt = $this->db->prepare("INSERT INTO comments (user_id, project_id, content) VALUES (?, ?, ?)");
        return $stmt->execute([$userId, $projectId, $content]);
    }

    public function getCommentsByProject($projectId) {
        $stmt = $this->db->prepare("SELECT * FROM comments WHERE project_id = ?");
        $stmt->execute([$projectId]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
