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

	<title>Atletic WEB | Filtrar</title>
    
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
            
            <h2> Filtrar | Atletas | Disciplinas</h2>

        </div>

        <div id="Form">

              <table>
                    
   <?php

   include "Conexion.inc"; 
          
          if (isset($_POST["value"])){
          $ori = $_POST["value"];
        } else {
          $ori = $_GET["value"];
        }

        if (isset($_GET["ORD"])){
            $orden = $_GET["ORD"];
          } else {
            $orden = 'IdDis';
          } 
   
          if ($ori ==""){
          $sql= "SELECT * FROM Disciplina ORDER BY $orden";
          } else if ($ori =="id"){
            $sql= "SELECT * FROM Disciplina ORDER BY $orden";
          } else {
            $sql= "SELECT * FROM Disciplina ORDER BY DisAt";
          }

               $ver=mysqli_query($conex,$sql);

               echo "
               <th><a href='ConsultasVERDIS.php?ORD=IdDis'>ID</a></th>
               <th><a href='ConsultasVERDIS.php?ORD=DisAt&value=$ori'>Disciplina</a></th>
               ";

               $fila= 1;

               while ($regPers=mysqli_fetch_array($ver)) {

                $id = $regPers["IdDis"];
                $disciplinas = utf8_decode($regPers["DisAt"]);

                $resto=$fila%2;

                if ($resto==0){
                    echo"<tr>\n";
                } else {
                    echo"<tr>\n";
                }

                echo "<td>$id</td>\n";
                echo "<td>$disciplinas</td>\n";

        }
    ?>
                 </table>
   
               <div id="botones2">

                <input type="submit" value="Inicio" id="boton" name="fil" onclick="Inicio();">
                <input type="button" value="Regresar" id="boton" name="can" onclick="Regresar();">
                
               </div>
         </div>

    </section>

    <?php
    include "F.inc"
    ?>
    
</body>
</html>