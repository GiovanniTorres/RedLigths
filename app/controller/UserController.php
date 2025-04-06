// app/controller/UserController.php

namespace App\Controller;

use UserModel;

class UserController
{
    public function index()
    {
        $model = new UserModel();
        $users = $model->getAll();
        require_once '../app/views/header.php';
        require_once '../app/views/registered_users.php';
        require_once '../app/views/footer.php';
    }
}
