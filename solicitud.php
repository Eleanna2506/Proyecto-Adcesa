<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="solicitud.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poiret+One&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cherry+Cream+Soda&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<body>
<header  class="header">
        <img class="logoHeader" src="./Imagenes/logo.png" alt="logo">
        <h1 class="significadoicono">Solicitud del servicio</h1>
        <button id="abrir" class="abrir-menu"><i class="bi bi-list"></i></button>
        <nav class="nav" id="nav">
            <button class="cerrar-menu" id="cerrar"><i class="bi bi-x"></i></button>
            <ul class="nav-list">
                <li><a href="servicios.php"><i class="fa-solid fa-store" style="color: #ffffff;"></i></a></li>
                <li><a href="solicitud.php"><i class="fa-solid fa-cart-shopping" style="color: #ffffff;"></i></a></li>
                <li><a href="#"><i class="fa-solid fa-money-check-dollar" style="color: #ffffff;"></i></a></li>
                <li><a href="#"><i class="fa-solid fa-comment" style="color: #ffffff;"></i></a></li>
                <li><a href="#"><i class="fa-solid fa-bell" style= "color: #ffffff;"></i></a></li>
                <li><a href="#"><i class="fa-solid fa-user" style="color: #ffffff;"></i></a></li>
            </ul>
        </nav>
    </header>
    <main>
    <div class="columna">
        <form action="Procesar_solicitud.php" method="POST" enctype="multipart/form-data">
            <h1 class="pregunta">Servicio</h1>
            <select class="respuesta" name="servicios" id="servicios">
                <option value="Avisos">Avisos</option>
                <option value="Banderines">Banderines</option>
                <option value="Caja">Caja</option>
                <option value="Display">Display</option>
                <option value="Letrero">Letrero</option>
                <option value="Logo">Logo</option>
                <option value="Porta-Accesorios">Porta Accesorios</option>
                <option value="Recuerdos">Recuerdos</option>
                <option value="Rotulacion">Rotulación</option>
                <option value="Stand">Stand</option>
                <option value="Vallas">Vallas</option>
            </select>

            <h1 class="pregunta">Descripción</h1>
            <textarea class="respuesta" name="descripcion" id="descripcion" placeholder="Describa con exactitud como desea el producto"></textarea>
            <h1 class="pregunta">Referencia</h1>
            <input type="file" accept="image/*" name="referencia" id="referencia">
            <button type="submit" class="button" name="Enviar" value="Enviar">Enviar</button>
        </form>
        </div>

        <footer>
    <div class="footer"><h3>Dirección</h3><p>Av. Páez entre calle Mérida y Apure, Casa Nro. 13-47, Centro Barinas, Zonal Postal 5201 - Venezuela</p></div>
    <div class="footer"><h3>Contacto</h3><p>(+58) 424-5104676</p></div>
    <div class="footer"><h3>Instagram</h3><p><a href="https://www.instagram.com/adcesapublicidad?igsh=cGh3b3dqZ3RlZWZq">adcesapublicidad<i class="fa-brands fa-instagram" style="color:rgb(10, 3, 110);"></i></a></p></div>
    </footer>

    </main>