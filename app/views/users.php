<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title><?= htmlspecialchars($title) ?></title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #111;
            color: #eee;
            padding: 20px;
        }

        h1 {
            color: #e53935;
        }

        .user-card {
            background-color: #222;
            border: 1px solid #444;
            border-radius: 10px;
            padding: 15px;
            margin-bottom: 15px;
        }

        .user-card p {
            margin: 5px 0;
        }

        .back-link {
            color: #00bcd4;
            text-decoration: none;
        }

        .back-link:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

    <h1><?= htmlspecialchars($title) ?></h1>

    <?php if ($viewType === 'list'): ?>
        <?php if (!empty($users)): ?>
            <?php foreach ($users as $user): ?>
                <div class="user-card">
                    <p><strong>ID:</strong> <?= htmlspecialchars($user['id']) ?></p>
                    <p><strong>Nombre:</strong> <?= htmlspecialchars($user['name']) ?></p>
                    <p><strong>Email:</strong> <?= htmlspecialchars($user['email']) ?></p>
                </div>
            <?php endforeach; ?>
        <?php else: ?>
            <p>No hay usuarios registrados.</p>
        <?php endif; ?>

    <?php elseif ($viewType === 'detail'): ?>
        <?php if (!empty($user)): ?>
            <div class="user-card">
                <p><strong>ID:</strong> <?= htmlspecialchars($user['id']) ?></p>
                <p><strong>Nombre:</strong> <?= htmlspecialchars($user['name']) ?></p>
                <p><strong>Email:</strong> <?= htmlspecialchars($user['email']) ?></p>
            </div>
            <a class="back-link" href="/users">Volver al listado</a>
        <?php else: ?>
            <p>Usuario no encontrado.</p>
        <?php endif; ?>

    <?php else: ?>
        <p>Vista no reconocida.</p>
    <?php endif; ?>

</body>
</html>
