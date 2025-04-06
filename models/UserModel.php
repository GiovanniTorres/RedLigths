<?php
namespace App\Models;

use Core\Database;

class UserModel
{
    public static function getAllUsers()
    {
        $db = Database::getInstance();
        $stmt = $db->query("SELECT * FROM users");
        return $stmt->fetchAll();
    }

    public static function getUserById($id)
    {
        $db = Database::getInstance();
        $stmt = $db->prepare("SELECT * FROM users WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch();
    }

    public static function createUser($username, $email, $role)
    {
        $db = Database::getInstance();
        $stmt = $db->prepare("INSERT INTO users (username, email, role, password) VALUES (?, ?, ?, ?)");
        $defaultPassword = password_hash("123456", PASSWORD_DEFAULT); // Contraseña por defecto
        $stmt->execute([$username, $email, $role, $defaultPassword]);
    }

    public static function updateUser($id, $username, $email, $role)
    {
        $db = Database::getInstance();
        $stmt = $db->prepare("UPDATE users SET username = ?, email = ?, role = ? WHERE id = ?");
        $stmt->execute([$username, $email, $role, $id]);
    }

    public static function deleteUser($id)
    {
        $db = Database::getInstance();
        $stmt = $db->prepare("DELETE FROM users WHERE id = ?");
        $stmt->execute([$id]);
    }
}
