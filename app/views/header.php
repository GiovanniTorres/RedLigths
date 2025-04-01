<!-- header.php -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>redLigths()</title>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    <link rel="stylesheet" href="menu.css"> <!-- Menú Estilos -->
    <link rel="stylesheet" href="style.css"> <!-- Estilos Generales -->
   <link rel="stylesheet" href="home.css"> <!-- Estilos Generales -->

   <link rel="stylesheet" href="footer.css"> <!-- Estilos Generales -->

<script src="menu.js"></script>
<link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
    <header>
        <div class="header-container">
            <div class="border border-black logo">
                <a href="#"><span id="parentesis">(&nbsp)</span></a>
            </div>
            <nav class="navbar">
                <ul class="menu" id="menu">
                    <li><a href="?views=home">Inicio</a></li>
                    <li><a href="?views=product">Productos</a></li>
                    <li><a href="?views=contact">Contacto</a></li>
                    <li><a href="?views=aboutme">Sobre Nosotros</a></li>
                </ul>
                <div class="menu-toggle" id="menu-toggle">
                    <span class="bar"></span>
                    <span class="bar"></span>
                    <span class="bar"></span>
                </div>
            </nav>
        </div>
    </header>
