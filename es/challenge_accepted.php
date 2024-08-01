<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Personal Portfolio</title>

  <!-- favicon -->
  <link rel="shortcut icon" href="./assets/images/logo.ico" type="image/x-icon">

  <!-- custom css link -->
  <link rel="stylesheet" href="./estilo.css">

  <!-- google font link -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
</head>

<body>

  <?php require 'navbar.php'; ?>

 
  

  <div class="main-content-project">
  <div class="title">
      CHALLENGE ACCEPTED
    </div>

    
      <section class="explication-project">
<p>
Challenge Accepted es una aplicación que simula un juego de "verdad o reto". En esta aplicación, 
existen dos tipos de usuario: el jugador y el administrador. Los jugadores pueden iniciar sesión para añadir
 nuevos participantes y seleccionar la categoría en la que desean jugar. Posteriormente, se les presentan
  preguntas de "verdad" y "reto" al azar. Cada vez que aceptan una pregunta, suman 100 puntos, y se muestra 
  una lista con el conteo de puntos acumulados. Por otro lado, el administrador tiene la capacidad de agregar 
  nuevas categorías, así como nuevas preguntas de "verdad" y "reto". Además, antes de iniciar sesión, el administrador 
  puede revisar una caja de sugerencias para decidir si implementa las propuestas recibidas.

<br>
<br>
La base de datos creada para el funcionamiento de la aplicación incluye varias tablas que almacenan información 
sobre categorías, contenido del juego, sugerencias, usuarios y tipos de usuario, clasificación de puntos, entre otras,
 para asegurar la correcta operación y seguridad de la aplicación.
        </p>
      </section>
    

    <div class="video-container">
      <video controls>
        <source src="../img/challenge-accepted.mp4" type="video/mp4">
        Your browser does not support the video tag.
      </video>
    </div>
    </div>


</body>

<?php require 'back.php'; ?>

</html>
