<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Passions+Conflict&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kodchasan:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poiret+One&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<body>
<header  class="header">
        <img class="logoHeader" src="./Imagenes/logo.png" alt="logo">
        <button id="abrir" class="abrir-menu"><i class="bi bi-list"></i></button>
        <nav class="nav" id="nav">
            <button class="cerrar-menu" id="cerrar"><i class="bi bi-x"></i></button>
            <ul class="nav-list">
                <li><a href="servicios.php"><i class="fa-solid fa-store" style="color: #ffffff;"></i></a></li>
                <li><a href="solicitud.php"><i class="fa-solid fa-pen-to-square" style="color: #ffffff;"></i></a></li>
                <li><a href="#"><i class="fa-solid fa-money-check-dollar" style="color: #ffffff;"></i></a></li>
                <li><a href="#"><i class="fa-solid fa-comment" style="color: #ffffff;"></i></a></li>
                <li><a href="#"><i class="fa-solid fa-bell" style= "color: #ffffff;"></i></a></li>
                <li><a href="#"><i class="fa-solid fa-user" style="color: #ffffff;"></i></a></li>
            </ul>
        </nav>
    </header>
    <main>
        <form action="Procesar_solicitud.php" method="POST" enctype="multipart/form-data">
            <h1>Servicio a elegir</h1>
            <select name="servicios" id="servicios">
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
            <h1>Descripcion del servicio</h1>
            <textarea name="descripcion" id="descripcion" placeholder="Describa con exactitud como desea el producto"></textarea>
            <h1>Subir una referencia</h1>
            <input type="file" accept="image/*" name="referencia" id="referencia">
            <button name="Enviar" value="Enviar">Enviar</button>
        </form>
    </main>