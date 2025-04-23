<!-- app/views/auth/register_user.php -->
<section class="max-w-md mx-auto mt-10 bg-white p-6 rounded-xl shadow-md">
    <h2 class="text-2xl font-bold mb-4 text-center">Crear nuevo usuario</h2>

    <?php if (!empty($errors)): ?>
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
            <ul class="list-disc list-inside text-sm">
                <?php foreach ($errors as $error): ?>
                    <li><?= htmlspecialchars($error) ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
    <?php endif; ?>

    <form action="/users/store" method="POST" class="space-y-4">
        <div>
            <label for="name" class="block font-medium">Nombre</label>
            <input type="text" name="name" id="name" value="<?= htmlspecialchars($_POST['name'] ?? '') ?>" required class="w-full border <?= isset($errors['name']) ? 'border-red-500' : 'border-gray-300' ?> rounded px-3 py-2">
        </div>

        <div>
            <label for="email" class="block font-medium">Correo electrónico</label>
            <input type="email" name="email" id="email" value="<?= htmlspecialchars($_POST['email'] ?? '') ?>" required class="w-full border <?= isset($errors['email']) ? 'border-red-500' : 'border-gray-300' ?> rounded px-3 py-2">
        </div>

        <div>
            <label for="password" class="block font-medium">Contraseña</label>
            <input type="password" name="password" id="password" required class="w-full border <?= isset($errors['password']) ? 'border-red-500' : 'border-gray-300' ?> rounded px-3 py-2">
        </div>

        <button type="submit" class="w-full bg-blue-600 text-white py-2 rounded hover:bg-blue-700">
            Registrar usuario
        </button>
    </form>
</section>
