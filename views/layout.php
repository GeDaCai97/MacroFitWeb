<?php 
    if(!isset($_SESSION)) {
        session_start();
    }
    $auth = $_SESSION['login'] ?? false;
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mundo Fitness</title>
    <link rel="stylesheet" href="/build/css/app.css">
</head>
<body>
<header class="header <?php echo $inicio ? 'inicio' : ''; ?>">
        <div class="Contenedor-menu">
            <div class="Logo">
                <div class="logo-image">
                    <img src="/build/img/logoFit.png" alt="Logo del mundo" class="logo-image">
                </div>
                <a href="/">MACROFITWEB</a>
            </div>

        
            <nav class="enlaces_header">
                <ul>
                    <?php if($auth) { ?>
                        <li><a href="/logout">Cerrar Sesión</a></li>
                        <li><a href="/admin"> Administrador </a></li>
                    <?php } else {  ?>
                    <li><a href="/login"> Iniciar Admin </a></li>
                    <?php }; ?>
                    <?php if($inicio) { ?>
                    <li><a href="#calculadora"> Calculadora </a></li>
                    <?php } ?>
                    <li><a href="#"> Contactos </a></li>
                    <li><a href="/informacion"> Información </a></li>
                </ul>
            </nav>
        </div>
        <?php if($inicio) {?>
        <section class="contenedor-header">
            <div class="contenido-header">
                <h1>Mundo Fit</h1>
                <p>Bienvenidos a MacroFitWeb, aquí podrás explorar contenido acerca del Mundo Fit, nutrición y novedades.</p>
                <p>La buena alimentacion es uno de los hábitos más importantes para gozar de salud. Tanto a nivel físico como mental y tener una buena calidad de vida.</p>
                <div class = "botones-header">
                    <a href="#">Nuevos productos</a>
                    <a href="#articulos">Leer articulos</a> 
                </div>
                
            </div>
        </section>
        <?php }?>
    </header>
    <main>



    <?php echo $contenido; ?>






    </main>
    <footer class="footer">
        <div class="Contenedor-footer">
            <div class="Fuentes-footer">
                    <h3>Recursos</h3>
                    <ul>
                        <li><a href="#">Contactenos</a></li>
                        <li><a href="#">Politica de privacidad</a></li>
                        <li><a href="#">Terminos y condiciones</a></li>
                        <li><a href="#">Reportar un error</a></li>
                    </ul>
            </div>
            
        </div>
        <div class="Contenedor-footer2">
            <div class="footer-final">
                <p>&copy; <?php echo date('Y'); ?> - MundoFitness / desarrollo por BurgerCommand y GeDaCai97</p>
            </div>
        </div>
        
    </footer>
    <script src="/build/js/bundle.min.js"></script>
</body>
</html>