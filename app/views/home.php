<div class="text-center py-10 bg-white text-white">
    <h1 class="text-4xl font-bold text-black">RedLights()<span class="text-red-500">.</span></h1>
    <p class="text-lg text-black">Desarrollo<span class="text-red-500">,</span> web con estilo<span class="text-red-500"> y </span>eficiencia<span class="text-red-500">.</span></p>
</div>

<!-- Modal de Inicio de Sesión -->
<div id="loginModal" class="hidden fixed inset-0 bg-black bg-opacity-50 flex justify-center items-center">
    <div class="bg-white p-6 rounded-lg shadow-lg w-96">
        <h2 class="text-2xl mb-4 text-black">Iniciar sesión</h2>
        <input type="text" placeholder="Usuario" class="w-full p-2 mb-2 border rounded">
        <input type="password" placeholder="Contraseña" class="w-full p-2 mb-4 border rounded">
        <button class="bg-red-500 text-white px-4 py-2 w-full rounded">Entrar</button>
        <button onclick="toggleLoginModal()" class="mt-2 text-red-500 w-full">Cerrar</button>
    </div>
</div>
<!-- Sección de Proyectos -->
<section class="max-w-6xl mx-auto px-6 bg-white text-white">
    <h2 class="text-3xl text-black mb-6">Proyectos Destacados<span class="text-red-500">.</span></h2>
    <div class="grid md:grid-cols-3 gap-6">
        <!-- Tarjeta de Proyecto -->
        <div class="bg-black p-4 rounded-xl shadow-lg">
            <img src="https://via.placeholder.com/300" alt="Proyecto 1" class="rounded-lg mb-3">
            <h3 class="text-xl text-white">Proyecto 1</h3>
            <p class="text-gray-400">Descripci<span class="text-red-500">ó</span>n breve del proyecto<span class="text-red-500">...</span></p>
        </div>
        <div class="bg-black p-4 rounded-xl shadow-lg">
            <img src="https://via.placeholder.com/300" alt="Proyecto 2" class="rounded-lg mb-3">
            <h3 class="text-xl text-white">Proyecto 2</h3>
            <p class="text-gray-400">Descripci<span class="text-red-500">ó</span>n breve del proyecto<span class="text-red-500">...</span></p>
        </div>
        <div class="bg-black p-4 rounded-xl shadow-lg">
            <img src="https://via.placeholder.com/300" alt="Proyecto 3" class="rounded-lg mb-3">
            <h3 class="text-xl text-white">Proyecto 3</h3>
            <p class="text-gray-400">Descripci<span class="text-red-500">ó</span>n breve del proyecto<span class="text-red-500">...</span></p>
        </div>
    </div>
</section>
<!-- Botón de Contacto -->
<div class="text-center py-10 bg-white">
    <a href="#" class="text-turquoise-400 hover:text-black-500 font-bold py-2 px-6 rounded-full text-lg shadow-md">Cont<span class="text-red-500">á</span>ctame</a>
</div>
<!-- Script para el Modal -->
<script>
function toggleLoginModal() {
    document.getElementById("loginModal").classList.toggle("hidden");
}
</script>
