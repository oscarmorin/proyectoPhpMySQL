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

          if (isset($_POST["id"])){
          $dis = $_POST["id"];
        } else {
          $dis = $_GET["id"];
        }

          if (isset($_GET["ORD"])){
            $orden = $_GET["ORD"];
          } else {
            $orden = 'IdRe';
          }          
          
          if ($dis=="" && $ori==""){
               $sql= "SELECT a.IdRe, a.NomRe, a.EdadRe, a.PaisRe, a.StAt, d.DisAt 
                      FROM Atletas AS a 
                      JOIN Disciplina AS d
                      ON a.DisRe = d.IdDis
                      ORDER BY $orden";              
            }  else if ($dis!="" && $ori ==""){
               $sql= "SELECT a.IdRe, a.NomRe, a.EdadRe, a.PaisRe, a.StAt,d.DisAt 
                      FROM Atletas AS a 
                      JOIN Disciplina AS d
                      ON a.DisRe = d.IdDis
                      WHERE d.IdDis = '$dis'
                      ORDER BY $orden";               
                } else if ($dis=="" && $ori!=""){
              $sql= "SELECT a.IdRe, a.NomRe, a.EdadRe, a.PaisRe, a.StAt, d.DisAt 
                      FROM Atletas AS a 
                      JOIN Disciplina AS d
                      ON a.DisRe = d.IdDis
                      WHERE a.PaisRe = '$ori'
                      ORDER BY $orden"; 
              } else {
                 $sql= "SELECT a.IdRe, a.NomRe, a.EdadRe, a.PaisRe, a.StAt, d.DisAt 
                      FROM Atletas AS a 
                      JOIN Disciplina AS d
                      ON a.DisRe = d.IdDis
                      WHERE a.PaisRe = '$ori' AND d.IdDis = '$dis'
                      ORDER BY $orden"; 
              }   


        $ver=mysqli_query($conex,$sql);

                if (mysqli_num_rows($ver)==0) {
                  echo "No hay registros con el filtro seleccionado";
                }
      
                  echo "
                  <tr>
                   <th>
                   <a href='ConsultasVER.php?ORD=IdRe&id=$dis&value=$ori'>ID</a>
                   </th>
                   <th>
                   <a href='ConsultasVER.php?ORD=NomRe&id=$dis&value=$ori'>Nombre Completo</a>
                   </th>
                   <th>
                   <a href='ConsultasVER.php?ORD=EdadRe&id=$dis&value=$ori'>Edad</a>
                   </th>
                   <th>
                   <a href='ConsultasVER.php?ORD=PaisRe&id=$dis&value=$ori'>País de Origen</a>
                   </th>
                   <th>
                   <a href='ConsultasVER.php?ORD=DisAt&id=$dis&value=$ori'>Disciplina</a>
                   </th>
                   </tr>
                   ";
              
               $fila= 1;

               while ($regPers=mysqli_fetch_array($ver)) {

                $id = $regPers["IdRe"];
                $nombre = utf8_encode($regPers["NomRe"]);
                $edad = $regPers["EdadRe"];
                $origen = utf8_encode($regPers["PaisRe"]);
                $disciplina = utf8_encode($regPers["DisAt"]);
                $estado = $regPers["StAt"];

                $resto=$fila%2;

                if ($resto==0){
                    echo"<tr>\n";
                } else {
                    echo"<tr>\n";
                }

                echo "<td>$id</td>\n";
                echo "<td>$nombre</td>\n";
                echo "<td>$edad</td>\n";
                echo "<td>$origen</td>\n";
                echo "<td>$disciplina</td>\n";
              
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