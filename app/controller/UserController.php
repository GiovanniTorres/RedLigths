<?php

namespace App\Controller;

use App\Models\UserModel;

class UserController
{
    private $userModel;

    public function __construct()
    {
        $this->userModel = new UserModel();
    }

    // Mostrar todos los usuarios
    public function index()
    {
        $users = $this->userModel->getAll();
        require_once '../app/views/header.php';
        require_once '../app/views/registered_users.php';
        require_once '../app/views/footer.php';
    }

    // Mostrar formulario de registro
    public function create()
    {
        require_once '../app/views/header.php';
        require_once '../app/views/auth/register.php';
        require_once '../app/views/footer.php';
    }

    // Guardar nuevo usuario
    public function store()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $data = [
                'username' => $_POST['username'] ?? '',
                'email'    => $_POST['email'] ?? '',
                'password' => password_hash($_POST['password'] ?? '', PASSWORD_DEFAULT),
                'role'     => $_POST['role'] ?? 'viewer'
            ];

            $this->userModel->create($data);
            header("Location: /users");
            exit;
        }
    }

    // Mostrar formulario de edición
    public function edit()
    {
        $id = $_GET['id'] ?? null;
        if ($id) {
            $user = $this->userModel->getById($id);
            require_once '../app/views/header.php';
            require_once '../app/views/auth/edit.php'; // esta vista la crearemos
            require_once '../app/views/footer.php';
        } else {
            echo "ID no proporcionado";
        }
    }

    // Actualizar usuario
    public function update()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $data = [
                'id'       => $_POST['id'],
                'username' => $_POST['username'],
                'email'    => $_POST['email'],
                'role'     => $_POST['role']
            ];

            $this->userModel->update($data);
            header("Location: /users");
            exit;
        }
    }

    // Eliminar usuario
    public function delete()
    {
        $id = $_GET['id'] ?? null;
        if ($id) {
            $this->userModel->delete($id);
            header("Location: /users");
            exit;
        }
    }
}
