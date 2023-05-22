<?php

include("conectar.php");

if(isset($_GET["id"])){

    $id=$_GET["id"];
    $link=mysqli_connect($host, $user, $pass, $db);

    $delete ="DELETE FROM datos clientes WHERE id= '$id'";

    $result= mysqli_query ($link, $delete);

    if($result){
        echo  "Datos"
    }
}

?>