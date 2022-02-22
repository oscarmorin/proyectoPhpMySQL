<?php  
               include "Conexion.inc";

                  if($_POST["idr"]==""){
                    echo "Seleccione el ID de Atleta para modificar";
                  } else { 

                    $id         = $_POST["idr"];
                    $nombre     = $_POST["Nom"];
                    $edad       = $_POST["Edad"];
                    $origen     = $_POST["value"];
                    $disciplina = $_POST["id"];
                
                $modificar= "UPDATE  Atletas SET NomRe='$nombre', EdadRe='$edad', PaisRe='$origen',DisRe='$disciplina' WHERE IdRe='$id'";

                $upd= mysqli_query($conex,$modificar);
                
                header("Location: Atletas.php");

              
                }// End If
?>