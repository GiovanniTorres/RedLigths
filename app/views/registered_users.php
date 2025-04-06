<h1>Lista de Usuarios Registrados</h1>

<a href="/users/create">Agregar Usuario</a>

<?php if (!empty($users) && is_array($users)): ?>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre de Usuario</th>
                <th>Email</th>
                <th>Rol</th>
                <th>Fecha de Registro</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $user): ?>
            <tr>
                <td><?= htmlspecialchars($user['id']) ?></td>
                <td><?= htmlspecialchars($user['username']) ?></td>
                <td><?= htmlspecialchars($user['email']) ?></td>
                <td><?= htmlspecialchars($user['role']) ?></td>
                <td><?= htmlspecialchars($user['created_at']) ?></td>
                <td>
                    <a href="/users/edit?id=<?= urlencode($user['id']) ?>">Editar</a> |
                    <a href="/users/delete?id=<?= urlencode($user['id']) ?>" onclick="return confirm('¿Eliminar este usuario?')">Eliminar</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
<?php else: ?>
    <p>No hay usuarios registrados aún.</p>
<?php endif; ?>
