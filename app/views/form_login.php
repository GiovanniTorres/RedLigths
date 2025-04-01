<?php require_once __DIR__ . '/../../../controller/LoginController.php'; ?>

<div class="flex items-center justify-center min-h-screen bg-gray-100">
    <form action="/login" method="POST" class="bg-white p-6 rounded-lg shadow-md w-96">
        <h2 class="text-center text-xl font-bold mb-4">Iniciar Sesión</h2>
        
        <input type="email" name="email" placeholder="Correo electrónico" 
               class="block w-full mb-2 p-2 border rounded" required>
        
        <input type="password" name="password" placeholder="Contraseña" 
               class="block w-full mb-2 p-2 border rounded" required>
        
        <button type="submit" class="w-full bg-blue-500 text-white p-2 rounded">Entrar</button>

        <p class="text-center text-sm mt-4">
            ¿No tienes cuenta? <a href="/register" class="text-blue-500">Regístrate aquí</a>
        </p>
    </form>
</div>
