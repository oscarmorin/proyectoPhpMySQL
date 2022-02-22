<?php  

    include "Conexion.inc";


              $id = $_POST["idr"];
              $st = $_POST["value"];

                  if ($st == "I" && $_POST["idr"]!=="" ){

                $Eliminar= "UPDATE Atletas SET StAt='I' WHERE IdRe='$id'";
                $upd= mysqli_query($conex,$Eliminar);
                header("Location: Atletas.php");

                  } else if ($st == "A" && $_POST["idr"]!=="" ){ 

                $Eliminar= "UPDATE Atletas SET StAt='A' WHERE IdRe='$id'";
                $upd= mysqli_query($conex,$Eliminar);
                header("Location: Atletas.php");
                } else {
                  echo "Seleccione el ID de Atleta para modificar";
                }     

?>
