<?php
session_start();

if (!isset($_SESSION['username'])) {
    header('Location: index.html');
    exit;
}

$username = $_SESSION['username'];
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

    <header>
        <nav class="navbar">
            <h1>Task Manager</h1>
            
            <ul>
                <li><a href="#">Inicio</a></li>
                <li><a href="#"></a></li>
                <li><a href="#">Servicios</a></li>
                <li><a href="#">Contacto</a></li>
                <div class="nombre"><?php echo htmlspecialchars($username); ?>!</div>

            </ul>
        </nav>
    </header>

    <div class="container">
        <aside class="sidebar">
         
            <ul>
                <li><a href="ingresar.html">Enlace 1</a></li>
                <li><a href="#">proyecto</a></li>
                <li><a href="#">tareas</a></li>
                <li><a href="#">notificaciones</a></li>
                <li><a href="logout.php">Cerrar Sesión</a></li>
            </ul>
        </aside>
    

      <div class="cuerpo">

           <main class="main-content">
            <h2>Bienvenido,<?php echo htmlspecialchars($username); ?>!</h2>
            <p>Este es el contenido principal de la página.</p>
           </main>
    

          <div class="welcome-container">
            <h1>Bienvenido, </h1>
            
          </div>
       </div>
    </div>
</body>


</html>
