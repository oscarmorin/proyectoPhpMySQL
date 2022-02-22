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

  <title>Atletic WEB | Alta - Baja</title>
    
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
            
            <h2>Alta o Baja de Registro</h2>

        </div>

        <form id="Registrarse" action="AltaBaja.php" name="Registrarse" method="POST">

            <div id="Form">
               
               <table id="table">
                   <th>ID</th>
                   <th>Nombre Completo</th>
                   <th>Edad</th>
                   <th>País de Origen</th>
                   <th>Disciplina</th>
                   <th>Estado</th>

               <?php  

               include "Conexion.inc";

                $id = $_POST["ID"];

                    $sql = "SELECT a.IdRe, a.NomRe, a.EdadRe, a.PaisRe,a.StAt, d.DisAt 
                            FROM Atletas AS a 
                            JOIN Disciplina AS d
                            ON a.DisRe = d.IdDis
                            WHERE IdRe=$id";

                    $resultado= mysqli_query($conex,$sql);

                    if (mysqli_num_rows($resultado)==0) {

                        echo ("ATENCION!!!... ID de Atleta vacío o inexistente ");
                        
                    } else {

                        $regPers = mysqli_fetch_array($resultado);
                        $id= $regPers["IdRe"];
                        $nombre = utf8_encode($regPers["NomRe"]);
                        $edad = $regPers["EdadRe"];
                        $origen = utf8_encode($regPers["PaisRe"]);
                        $disciplina = utf8_encode($regPers["DisAt"]);
                        $estado = $regPers["StAt"];


                        if ($estado == "I"){

                          echo "Persona Inactiva";

                  } else {

                          echo "Persona Activa";

                        }
                    }
   
               ?>

               <tr id="tab">
                   <td id="tab">
                       <input type="text" name="idr" readonly="true" 
                       <?php echo "value='$id'";?>
                       >
                   </td>
                   <td id="tab">
                       <input type="text" id="Nom" name="Nom" readonly="true" <?php
                       echo "value='$nombre'";
                       ?>/>
                   </td>
                   <td id="tab">
                       <input type="number" id="Edad" name="Edad" readonly="true" <?php
                       echo "value='$edad'";
                       ?>/>
                   </td>
                   <td id="tab">
                       <select id="value" name="value">
                   <option selected="value" <?php
                       echo "value='$origen'";
                       ?>/><?php
                       echo "$origen";?></option>
                   <option value="Alemania" disabled="">Alemania</option>
                   <option value="Holanda" disabled="">Holanda</option>
                   <option value="Suecia" disabled="">Suecia</option>

               </select>
                   </td>
                   <td>
                     <select id="disciplina" name="id" >
                    <option selected="value" disabled="" <?php
                       echo "value='$id'";
                       ?>><?php
                       echo "$disciplina";
                       ?></option>
                    <?php
                    $conex= mysqli_connect("localhost","Oscar","","AtleticWeb");

                    $sql= "SELECT * FROM Disciplina ORDER BY DisAt";
                    $result = mysqli_query($conex,$sql);

                    while ($disreg= mysqli_fetch_array($result)){
                    $id = $disreg["IdDis"];
                    $Dis = utf8_encode($disreg["DisAt"]);

                    echo "<option disabled='' value='$id'>$Dis</option>\n";
                    }
                    ?>
                </select>
                   </td>
                   <td id="tab">
                   <select id="value" name="value">
                   <option selected <?php
                       echo "value='$estado'";
                       ?> ><?php
                       echo "$estado";
                       ?></option>
                   <option value="A">Activo</option>
                   <option value="I">Inactivo</option>

               </select>
                   </td>
                   </tr>

               </table>

               <div id="botones2">

                <input type="button" value="Alta | Baja" id="boton" name="mod" onclick="Borrar ();">
                <input type="button" value="Regresar" id="boton" name="can" onclick="Eliminar ();">
                
               </div>

            </div>
            
        </form>

    </section>

    <?php
    include "F.inc"
    ?>
    
</body>
</html>