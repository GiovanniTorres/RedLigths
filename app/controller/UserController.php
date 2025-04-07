<?php
namespace App\Controller;

use App\Models\UserModel;

class UserController
{
    // Mostrar vista de usuarios registrados
    public function registered()
    {
        $users = UserModel::getAllUsers();
        require_once __DIR__ . '/../views/registered_users.php';
    }

    // Mostrar formulario para crear un usuario
    public function create()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $username = $_POST['username'] ?? '';
            $email = $_POST['email'] ?? '';
            $role = $_POST['role'] ?? '';

            if ($username && $email && $role) {
                UserModel::createUser($username, $email, $role);
                header('Location: /users/registered');
                exit;
            } else {
                $error = 'Todos los campos son obligatorios.';
            }
        }

        require_once __DIR__ . '/../views/create_user.php';
    }

    // Mostrar formulario para editar un usuario existente
    public function edit()
    {
        $id = $_GET['id'] ?? null;

        if (!$id) {
            echo "ID de usuario no proporcionado.";
            return;
        }

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $username = $_POST['username'] ?? '';
            $email = $_POST['email'] ?? '';
            $role = $_POST['role'] ?? '';

            if ($username && $email && $role) {
                UserModel::updateUser($id, $username, $email, $role);
                header('Location: /users/registered');
                exit;
            } else {
                $error = 'Todos los campos son obligatorios.';
            }
        }

        $user = UserModel::getUserById($id);

        if (!$user) {
            echo "Usuario no encontrado.";
            return;
        }

        require_once __DIR__ . '/../views/edit_user.php';
    }

    // Eliminar un usuario por ID
    public function delete()
    {
        $id = $_GET['id'] ?? null;

        if (!$id) {
            echo "ID de usuario no proporcionado.";
            return;
        }

        UserModel::deleteUser($id);
        header('Location: /users/registered');
        exit;
    }

    // Método por defecto
public function index()
{
    require_once __DIR__ . '/../../config/database.php';

    try {
        $stmt = $pdo->query("SELECT * FROM users");
        $users = $stmt->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        echo "Error en la consulta: " . $e->getMessage();
        return;
    }

    require_once __DIR__ . '/../views/registered_users.php';
}
}
