<?php

        include "Conexion.inc";

               $sql= "SELECT a.IdRe, a.NomRe, a.EdadRe, a.PaisRe, a.StAt, d.DisAt 
                      FROM Atletas AS a 
                      JOIN Disciplina AS d
                      ON a.DisRe = d.IdDis";

               $ver=mysqli_query($conex,$sql);

               $fila= 1;

               while ($regPers=mysqli_fetch_array($ver)) {

                $id = $regPers["IdRe"];
                $nombre = utf8_encode($regPers["NomRe"]);
                $edad = $regPers["EdadRe"];
                $origen = utf8_encode($regPers["PaisRe"]);
                $disciplina = utf8_encode($regPers["DisAt"]);
                $st = $regPers["StAt"];

                if($st!= "I"){

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
             }
    ?>