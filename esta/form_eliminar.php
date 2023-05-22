<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .tabla{

            border:1px solid #ccc;
            padding:10px;

        }

        td, th{
            border:1px solid #ccc;

        }

</head>
<body>
    <?php
        include("conectar.php");  //nuevoconectar.php

        if(isset($_POST["buscar"])&& isset($_POST["id"]) && !empty($_POST["id"])){

            $id = $_POST["id"];

            $link = mysqli_connect($host, $user, $pass, $db) or die("problemas");

            $sql ="SELECT * FROM datos_clientes WHERE id = '$id'";

            $result = mysqli_query($link, $sql);

            $row = mysqli_fetch_array($result);

            echo $row["id"]."<br>";
            echo $row["Nombre"]."<br>";
            echo $row["Apellido"]."<br><br>";
            



            // echo $row["Peliculas"]."<br><br>";

            // var_dump($row["Peliculas"]);

            //Transformar una cadena de caracteres en un array

            // $peliculas = explode(' - ', $row["Peliculas"]);

            // var_dump($peliculas);
            
        }else{

            echo "escriba el id";
        }

    ?>
   
    
    

    <form action="form_eliminar.php" method="post">


        <h2>Ingrese el ID del cliente a actualizar:</h2>

        <label for="id">ID del Cliente a Actualizar:</label>
        <input type="text" name="id" id="id" value="">
        
        <input type="submit" value="Buscar" name="buscar" id="buscar"> 

    </form>
        

        <br>
        <hr>
        <br>

        <table class="tabla">
            <tr>

                <th>id</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Telefono</th>
                <th>EstadoCivil</th>
                <th>Sexo</th>
                <th>Acciones</th>


            </tr>

            <?php
                if(isset($_POST["BUSCAR"]) && isset($_POST["id"])&& !empty($_POST["id"])){
            
            ?>

            <tr>

                <td><?php echo $row ["id"]; ?> </td>
                <td><?php echo $row ["Nombre"]; ?></td>
                <td><?php echo $row ["Apellido"]; ?></td>
                <td><?php echo $row ["Telefono"]; ?></td>
                <td><?php echo $row ["EstadoCivil"]; ?></td>
                <td><?php echo $row ["Sexo"]; ?></td>
                <td><a class="linkEliminar" href= "eliminar.php?id= Acciones</td>


            </tr>

                    <?php
            }


            ?>

        </table>

        <script>

      
</body>
</html>