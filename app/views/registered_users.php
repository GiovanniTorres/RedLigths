<?php
require_once __DIR__ . '/../../models/UserModel.php';

$userModel = new UserModel();
$users = $userModel->getAll();
?>

<h2 class="text-xl font-bold mb-4">Usuarios Registrados</h2>

<table class="table-auto w-full text-left border-collapse border border-gray-300">
    <thead class="bg-gray-100">
            <tr>
                        <th class="border px-4 py-2">ID</th>
                                    <th class="border px-4 py-2">Nombre</th>
                                                <th class="border px-4 py-2">Correo</th>
                                                        </tr>
                                                            </thead>
                                                                <tbody>
                                                                        <?php foreach ($users as $user): ?>
                                                                                <tr class="hover:bg-gray-50">
                                                                                            <td class="border px-4 py-2"><?= htmlspecialchars($user['id']) ?></td>
                                                                                                        <td class="border px-4 py-2"><?= htmlspecialchars($user['name']) ?></td>
                                                                                                                    <td class="border px-4 py-2"><?= htmlspecialchars($user['email']) ?></td>
                                                                                                                            </tr>
                                                                                                                                    <?php endforeach; ?>
                                                                                                                                        </tbody>
                                                                                                                                        </table>
