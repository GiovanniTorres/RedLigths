<?php
$data = require __DIR__ . '/auth/register.php';
?>
<?php if (isset($data['success'])): ?>
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
