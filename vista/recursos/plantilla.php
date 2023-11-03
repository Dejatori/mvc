<!DOCTYPE html>
<html lang="es-419">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Nombre de la APP WEB</title>
    <link rel="icon" href="vista/recursos/favicon.ico" type="image/x-icon"> <!-- Puede ser un png, jpg, svg, etc. -->
    <!-- Primero incluir los archivos de estilo de los plugins y librerías -->
    <link rel="stylesheet" href="vista/recursos/bootstrap/css/bootstrap.min.css">
    <!-- Luego los archivos de estilo propios -->
    <link rel="stylesheet" href="css/estilos.css">
</head>

<body>
    
<div class="wrapper">

    <!-- Aquí van los modulos de la aplicación -->
    <?php
        require_once 'vista/modulos/header.php';
        require_once 'vista/modulos/navbar.php';
        require_once 'vista/modulos/menu.php';
        // Los que hagan falta puedes modularizarlo a tu gusto
    ?>

    <!-- Aquí van las rutas de las páginas de la aplicación -->
    <?php
    // Se obtiene la ruta de la página a mostrar
    if (isset($_GET['ruta'])) {
        if ($_GET['ruta'] == 'inicio' || 
            $_GET['ruta'] == 'login' || 
            $_GET['ruta'] == 'registro' || 
            $_GET['ruta'] == 'tablas'
            ) {
            //Si la ruta es una de las siguientes se incluye el archivo correspondiente
            require_once 'paginas/' . $_GET['ruta'] . '.php';
        } else {
            //Si la ruta no es ninguna de las anteriores se incluye la página de error 404
            require_once 'modulos/404.php';
        }
    } else {
        //Si no se ha definido ninguna ruta se incluye la página de inicio
        require_once 'paginas/inicio.php'; 
    }
    ?>

    <!-- Aquí van los modulos de la aplicación que se incluyen al final de la página -->
    <?php
        require_once 'vista/modulos/footer.php';
    ?>

    <!-- Y aquí van los archivos de script -->
    <!-- Primero incluir los archivos de script de los plugins y librerías -->
    <script src="vista/recursos/jquery/jquery.min.js"></script>
    <script src="vista/recursos/bootstrap/js/bootstrap.min.js"></script>
    <!-- Luego los archivos de script propios -->
    <script src="js/scripts.js"></script>
    <!-- Recomiendo mucho incluir los archivos de script de la aplicación de esta forma -->
    <?php
    /* Que solo se cargue el script de cada página cuando se esté en esa página */
    $rutasPermitidas = array('inicio', 'login', 'registro', 'tablas');

    if (isset($_GET['ruta']) && in_array($_GET['ruta'], $rutasPermitidas)) {
        $ruta = $_GET['ruta'];

        $scriptPath = "vista/recursos/js/$ruta.js";

        if (file_exists($scriptPath)) {
            echo "<!-- $ruta -->";
            echo "<script src='$scriptPath'></script>";
        }
    }
    ?>
    
</body>

</html>