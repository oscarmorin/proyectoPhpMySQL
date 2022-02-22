<?php  
               include "Conexion.inc";

                    $disciplina    = utf8_decode($_POST["Dis"]);

                  if (empty($disciplina)){

                    echo "ATENCION!!!... Campo de Disciplina vacío";

                  } else {

                $modificar= "INSERT INTO Disciplina(IdDis,DisAt) VALUES (null,'$disciplina')";

                $sql = mysqli_query($conex,$modificar);
                
                header("Location: Disciplinas.php");
                msqli_close($conex);

                }
?>