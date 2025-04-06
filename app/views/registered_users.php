<h1>Lista de Usuarios</h1>

<a href="/users/create">Agregar Usuario</a>

<?php if (!empty($users) && is_array($users)): ?>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Email</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $user): ?>
            <tr>
                <td><?= htmlspecialchars($user['id']) ?></td>
                <td><?= htmlspecialchars($user['username']) ?></td>
                <td><?= htmlspecialchars($user['email']) ?></td>
                <td>
                    <a href="/users/edit?id=<?= urlencode($user['id']) ?>">Editar</a>
                    <a href="/users/delete?id=<?= urlencode($user['id']) ?>" onclick="return confirm('¿Eliminar?')">Eliminar</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
<?php else: ?>
    <p>No hay usuarios registrados.</p>
<?php endif; ?>
