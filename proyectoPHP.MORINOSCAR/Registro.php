<?php

        include "Conexion.inc";

        if (isset($_POST['Send'])){

                $nombre     = $_POST["Nom"];
                $edad       = $_POST["Edad"];
                $origen     = $_POST["value"];
                $disciplina = $_POST["id"];

            if (empty($nombre)      ||
                empty($edad)        ||
                empty($origen)      ||
                empty($disciplina)  ) {

                echo "Error en la linea SQL al enviar el registro";

            } else {

                $insertar = "INSERT INTO Atletas(IdRe,NomRe,EdadRe,PaisRe,DisRe,StAt) VALUES (null,'$nombre','$edad','$origen','$disciplina','A')";

                $resultado= mysqli_query($conex,$insertar);

                if (!$resultado) {

                    echo "Error en la linea SQL al enviar el registro";         
                    
                } else {

                        header("Location: Inicio.php");
                        msqli_close($conex); 
                    } 
                }
            }
    ?>