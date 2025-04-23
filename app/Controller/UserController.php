<?php
namespace App\Controller;

use Core\ViewHelper;
use App\Models\UserModel;
use Core\Database;

class UserController
{
    private $userModel;

    public function __construct()
    {
        $this->userModel = new UserModel(Database::getConnection());
    }

    // Listado de usuarios
    public function index()
    {
        $users = $this->userModel->getAllUsers();
        ViewHelper::render('users', [
            'title' => 'Listado de usuarios',
            'viewType' => 'list',
            'users' => $users
        ]);
    }

    // Ver detalle de usuario
    public function show($id)
    {
        $user = $this->userModel->getUserById($id);
        ViewHelper::render('users', [
            'title' => "Detalle del usuario #$id",
            'viewType' => 'detail',
            'user' => $user
        ]);
    }

    // Mostrar formulario de registro
    public function create()
    {
        ViewHelper::render('auth/register_user', [
            'title' => 'Crear nuevo usuario'
        ]);
    }

    // Guardar nuevo usuario
    public function store()
    {
        $name = $_POST['name'] ?? '';
        $email = $_POST['email'] ?? '';
        $password = $_POST['password'] ?? '';
        $errors = [];

        // Validación
        if (empty($name)) {
            $errors[] = "El nombre es obligatorio.";
        }
        if (empty($email)) {
            $errors[] = "El correo es obligatorio.";
        } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors[] = "El correo no es válido.";
        }
        if (empty($password)) {
            $errors[] = "La contraseña es obligatoria.";
        }

        // Si hay errores, vuelve al formulario de registro con los errores
        if (!empty($errors)) {
            ViewHelper::render('auth/register_user', [
                'title' => 'Crear nuevo usuario',
                'errors' => $errors
            ]);
            return;
        }

        // Si todo está bien, guardamos el usuario
        $passwordHash = password_hash($password, PASSWORD_DEFAULT);
        if ($this->userModel->createUser($name, $email, $passwordHash)) {
            header("Location: /users");
            exit;
        } else {
            ViewHelper::render('auth/register_user', [
                'title' => 'Error al registrar usuario',
                'errors' => ['Hubo un error al registrar el usuario.']
            ]);
        }
    }
}
