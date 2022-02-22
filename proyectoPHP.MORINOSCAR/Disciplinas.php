<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es">

<head>
	<meta http-equiv="content-type" content="text/html" />
	<meta name="author" content="Atletic WEB" />
    <meta http-equiv="Description" content="App WEB" />
    <meta http-equiv="Keywords" content="Atletas, Deportes, Paises, Juegos, Disciplinas" />
    <meta name="viewport" content="width=device-width; initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="CSS/fontello.css">
    <link rel="stylesheet" type="text/css" href="CSS/display-g.css" media="screen and (min-width:981px)"/>
    <link rel="stylesheet" type="text/css" href="CSS/display-m.css" media="screen and (min-width: 481px) and (max-width:980px)"/>
    <link rel="stylesheet" type="text/css" href="CSS/display-p.css" media="screen and (max-width:480px)"/>
    <script type="text/javascript" src="Js/Validacion.js"></script>

	<title>Atletic WEB | Disciplinas</title>
    
</head>

<body background="Imagenes/fondo2.png" >

<header>
    <input type="checkbox" id="bmenu"/>
    <label for="bmenu" class="icon-menu"></label>

    <ul> 
        
        <li><a href="Registrarse.php">Registrarse</a></li>
        <li><a href="Nosotros.php">Nosotros</a></li>
        <li><a href="Contactanos.php">Contáctanos</a></li>
        <li><a href="Consultas.php">Consultas</a></li>
        <li><a href="Disciplinas.php">Disciplinas</a></li>
        <li><a href="Atletas.php">Atletas</a></li>
        <li><a href="Inicio.php">Inicio</a></li>
                
    </ul>
</header>

    <section id="Formulario">

        <div id="titulo">
            
            <h2>Ingresar | Modificar </h2>

        </div>
        <form id="Registrarse" name="Registrarse" method="POST">
            <div id="Form">              
               <table>
                   <th>ID</th>
                   <th>Disciplinas</th>
               
               <?php  
               include "VerDis.php";
               ?>

               </table>

               <div id="botones">

                <input type="button" value="Ingresar" id="boton" name="ing" onclick="NewDis();">
                <input type="button" value="Modificar" id="boton" name="modi" onclick="Modificar2();">
                <input type="button" value="Filtrar" id="boton" name="fil" onclick="Regresar();">
                
               </div>
            </div>           
        </form>
    </section>

    <?php
    include "F.inc"
    ?>    
</body>
</html>