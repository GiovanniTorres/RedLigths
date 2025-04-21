<h1 class="text-3xl font-bold text-red-600 mb-6"><?= htmlspecialchars($title) ?></h1>

<?php if ($viewType === 'list'): ?>
    <?php if (!empty($users)): ?>
        <?php foreach ($users as $user): ?>
            <div class="bg-gray-800 text-white rounded-lg p-4 mb-4 border border-gray-600">
                <p><strong>ID:</strong> <?= htmlspecialchars($user['id']) ?></p>
                <p><strong>Nombre:</strong> <?= htmlspecialchars($user['name']) ?></p>
                <p><strong>Email:</strong> <?= htmlspecialchars($user['email']) ?></p>
            </div>
        <?php endforeach; ?>
    <?php else: ?>
        <p class="text-gray-400">No hay usuarios registrados.</p>
    <?php endif; ?>

<?php elseif ($viewType === 'detail'): ?>
    <?php if (!empty($user)): ?>
        <div class="bg-gray-800 text-white rounded-lg p-4 mb-4 border border-gray-600">
            <p><strong>ID:</strong> <?= htmlspecialchars($user['id']) ?></p>
            <p><strong>Nombre:</strong> <?= htmlspecialchars($user['name']) ?></p>
            <p><strong>Email:</strong> <?= htmlspecialchars($user['email']) ?></p>
        </div>
        <a href="/users" class="text-cyan-400 hover:underline">Volver al listado</a>
    <?php else: ?>
        <p class="text-red-400">Usuario no encontrado.</p>
    <?php endif; ?>

<?php else: ?>
    <p class="text-yellow-400">Vista no reconocida.</p>
<?php endif; ?>
