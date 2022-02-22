<?php  
               include "Conexion.inc";

               $sql= "SELECT * FROM Disciplina";

               $ver=mysqli_query($conex,$sql);

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