<h1 class="text-2xl font-bold mb-4"><?= $title ?></h1>

<?php if (!empty($error)): ?>
    <p class="text-red-500">Hubo un error al registrar el usuario.</p>
<?php endif; ?>

<form action="/users/store" method="POST" class="space-y-4">
    <div>
        <label class="block text-sm">Nombre:</label>
        <input type="text" name="name" required class="bg-gray-800 border border-gray-600 rounded p-2 w-full text-white">
    </div>
    <div>
        <label class="block text-sm">Email:</label>
        <input type="email" name="email" required class="bg-gray-800 border border-gray-600 rounded p-2 w-full text-white">
    </div>
    <div>
        <label class="block text-sm">Contraseña:</label>
        <input type="password" name="password" required class="bg-gray-800 border border-gray-600 rounded p-2 w-full text-white">
    </div>
    <button type="submit" class="bg-red-600 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
        Registrar
    </button>
</form>
