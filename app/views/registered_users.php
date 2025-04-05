<h1>Lista de Usuarios</h1>
<a href="/users/create">Agregar Usuario</a>
<table>
    <tr><th>ID</th><th>Nombre</th><th>Email</th><th>Acciones</th></tr>
    <?php foreach ($users as $user): ?>
    <tr>
        <td><?= $user['id'] ?></td>
        <td><?= $user['username'] ?></td>
        <td><?= $user['email'] ?></td>
        <td>
            <a href="/users/edit?id=<?= $user['id'] ?>">Editar</a>
            <a href="/users/delete?id=<?= $user['id'] ?>" onclick="return confirm('¿Eliminar?')">Eliminar</a>
        </td>
    </tr>
    <?php endforeach; ?>
</table>
