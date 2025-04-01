<?php
require_once __DIR__ . '/../controller/LoginController.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $auth = new LoginController();
    $auth->login($_POST['email'], $_POST['password']);
}
?>
