<?php  
               include "Conexion.inc";

                  $id             = $_POST["idr"];
                  $disciplina     = $_POST["dis"];

                  if (empty($disciplina)){

                    echo "ATENCION!!!... Campo de Disciplina vacío";

                  } else {

                $modificar= "UPDATE  Disciplina SET DisAt='$disciplina' WHERE IdDis='$id'";

                $upd= mysqli_query($conex,$modificar);

                header("Location: Disciplinas.php");

                }
?>