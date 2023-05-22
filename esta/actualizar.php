<?php

/*

*/

    include("conectar.php");

    if(isset($_POST["actualizar"]) && !empty($_POST["id_cliente"])){

        $id = $_POST["id_cliente"];
        $nombre = $_POST["nombre"];
        $apellido = $_POST["apellido"];
        $direccion = $_POST["direccion"];

        $link = mysqli_connect($host, $user, $pass, $db) or die("Problemas para conectar con la base de datos");

        if($link){
            echo "Conexión exitosa!!!";
        }

        $sql = "UPDATE datos_clientes SET Nombre = '$nombre', Apellido = '$apellido', Direccion = '$direccion' WHERE id = '$id'";

        $result = mysqli_query($link, $sql);

        if($result){

            echo "Datos actulizados correctamente";

        }else{

            echo "Problemas para actualizar los datos";
        }





    }else{

        echo "Problemas para enviar los datos del formulario";
    }

?>