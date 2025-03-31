// menu.js
document.addEventListener("DOMContentLoaded", () => {
    const menuToggle = document.getElementById("menu-toggle");
    const menu = document.getElementById("menu");

    function checkMenuOverflow() {
        const navbarWidth = document.querySelector(".navbar").offsetWidth;
        const menuWidth = menu.scrollWidth;

        if (menuWidth > navbarWidth) {
            menu.classList.add("mobile"); // Se activa el modo móvil
        } else {
            menu.classList.remove("mobile");
            menu.classList.remove("active"); // Asegurar que el menú no quede abierto
        }
    }

    menuToggle.addEventListener("click", () => {
        menu.classList.toggle("active");
    });

    // Cerrar el menú si se hace clic fuera de él
    document.addEventListener("click", (e) => {
        if (!menu.contains(e.target) && !menuToggle.contains(e.target)) {
            menu.classList.remove("active");
        }
    });

    window.addEventListener("resize", checkMenuOverflow);
    checkMenuOverflow(); // Ejecutar al inicio
});
