<?php
class NewsletterSubscriberModel {
    private $db;

    public function __construct($conn) {
        $this->db = $conn;
    }

    public function subscribe($email) {
        $stmt = $this->db->prepare("INSERT INTO newsletter_subscribers (email) VALUES (?)");
        return $stmt->execute([$email]);
    }

    public function getAllSubscribers() {
        $stmt = $this->db->query("SELECT * FROM newsletter_subscribers");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
