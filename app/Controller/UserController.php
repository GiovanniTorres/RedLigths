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
        $password = password_hash($_POST['password'] ?? '', PASSWORD_DEFAULT);

        if ($this->userModel->createUser($name, $email, $password)) {
            header("Location: /users");
            exit;
        } else {
            ViewHelper::render('auth/register', [
                'title' => 'Error al registrar usuario',
                'error' => true
            ]);
        }
    }
}
