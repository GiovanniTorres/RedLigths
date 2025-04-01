<?php
$data = require __DIR__ . '/auth/register.php';
?>
<div class="border border-black-500 p-4 text-center">
    <p>Registrarte</p>
</div>

<?php if (isset($data['success'])): ?>
    <div class="flex items-center justify-center min-h-screen p-4">
    <p class="text-green-500"><?= $data['success']; ?></p>
    <?php endif; ?>
    <?php if (isset($data['error'])): ?>
        <p class="text-red-500"><?= $data['error']; ?></p>
        <?php endif; ?>

        <form method="POST" action="">
            <input type="text" name="name" placeholder="Nombre" required>
            <input type="email" name="email" placeholder="Correo" required>
            <input type="password" name="password" placeholder="Contraseña" required>
            <button type="submit">Registrar</button>
        </form>
    </div>
