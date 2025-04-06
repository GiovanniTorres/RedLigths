<?php

namespace App\Models;

use Core\Database;
use PDO;

class UserModel
{
    private $db;

    public function __construct()
    {
        $this->db = Database::getInstance()->getConnection();
    }

    // Obtener todos los usuarios
    public function getAll()
    {
        $stmt = $this->db->query("SELECT * FROM users ORDER BY id DESC");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Obtener usuario por ID
    public function getById($id)
    {
        $stmt = $this->db->prepare("SELECT * FROM users WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    // Crear nuevo usuario
    public function create($data)
    {
        $stmt = $this->db->prepare("INSERT INTO users (username, email, password, role) VALUES (?, ?, ?, ?)");
        return $stmt->execute([
            $data['username'],
            $data['email'],
            $data['password'],
            $data['role']
        ]);
    }

    // Actualizar usuario
    public function update($data)
    {
        $stmt = $this->db->prepare("UPDATE users SET username = ?, email = ?, role = ? WHERE id = ?");
        return $stmt->execute([
            $data['username'],
            $data['email'],
            $data['role'],
            $data['id']
        ]);
    }

    // Eliminar usuario
    public function delete($id)
    {
        $stmt = $this->db->prepare("DELETE FROM users WHERE id = ?");
        return $stmt->execute([$id]);
    }
}
