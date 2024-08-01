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
      SISTEMA DE CONTROL DE ASISTENCIAS H. AYUNTAMIENTO
    </div>

    
      <section class="explication-project">
<p>
El sistema de control de asistencias es una aplicación que cuenta con dos tipos de usuarios: administradores y empleados. 
Ambos tipos de usuario tienen acceso al registro de asistencias, la vista de empleados y los reportes quincenales. 
Sin embargo, solo los administradores pueden realizar tareas adicionales como agregar nuevos usuarios, actualizar la 
información de los usuarios existentes, dar de baja a usuarios y consultar la lista de empleados dados de baja en el 
sistema.
<br>
<br>
El sistema funciona con una base de datos esencial para su operación, donde se almacenan los datos de cada usuario y se 
lleva el registro de las asistencias, incluyendo entradas y salidas.
        
        </p>
      </section>
    

    <div class="video-container">
      <video controls>
        <source src="../img/asistencias.mp4" type="video/mp4">
        Your browser does not support the video tag.
      </video>
    </div>
    </div>


</body>

<?php require 'back.php'; ?>

</html>
