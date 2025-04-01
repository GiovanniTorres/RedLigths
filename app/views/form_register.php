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

        <form method="POST" action="" class="p-6">
            <input type="text" class="block w-full-mb-2 p-2 border rounded" name="name" placeholder="Nombre" required>
            <input type="email" class="block w-full-mb-2 p-2 border rounded" name="email" placeholder="Correo" required>
            <input type="password" class="block w-full-mb-2 p-2 border rounded" name="password" placeholder="Contraseña" required>
            <button type="submit" class="w-full bg-blus-500 text-white p-2" >Registrar</button>
        </form>
    </div>
