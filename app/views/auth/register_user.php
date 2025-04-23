<h1><?= $title ?></h1>

<?php if (!empty($errors)): ?>
    <div class="alert alert-danger">
        <ul>
            <?php foreach ($errors as $error): ?>
                <li><?= $error ?></li>
            <?php endforeach; ?>
        </ul>
    </div>
<?php endif; ?>

<form action="/users/store" method="POST">
    <label for="name">Nombre</label>
    <input type="text" name="name" value="<?= $name ?? '' ?>" required>

    <label for="email">Correo</label>
    <input type="email" name="email" value="<?= $email ?? '' ?>" required>

    <label for="password">Contraseña</label>
    <input type="password" name="password" required>

    <button type="submit">Registrar</button>
</form>
