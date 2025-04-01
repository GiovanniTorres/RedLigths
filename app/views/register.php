<?php
require_once __DIR__ . '/../../models/UserModel.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'] ?? '';
        $email = $_POST['email'] ?? '';
            $password = $_POST['password'] ?? '';

                if (!empty($name) && !empty($email) && !empty($password)) {
                        $userModel = new UserModel();
                                if ($userModel->createUser($name, $email, $password)) {
                                            $success = "Usuario registrado con éxito.";
                                                    } else {
                                                                $error = "Error al registrar usuario.";
                                                                        }
                                                                            } else {
                                                                                    $error = "Todos los campos son obligatorios.";
                                                                                        }
                                                                                        }

                                                                                        // Retorna las variables para que la vista principal las muestre
                                                                                        return [
                                                                                            'success' => $success ?? null,
                                                                                                'error' => $error ?? null
                                                                                                ];
                                                                                                ?>