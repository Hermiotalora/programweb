<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
   
    
    

    <form action="form_actualizar.php" method="post">




        <h2>Ingrese el ID del cliente a actualizar:</h2>

        <label for="id">ID del Cliente a Actualizar:</label>
        <input type="text" name="id" id="id" value="">
        
        <input type="submit" value="Buscar" name="buscar" id="buscar"> 

    </form>
        

        <br>
        <hr>
        <br>

      

    <form action="actualizar.php" method="post">

        <input type="hidden" name="id_cliente" value="<?php 
        
        if(isset($_POST["buscar"])&& isset($_POST["id"]) && !empty($_POST["id"])){        
                
            echo $row["id"]; 
        
        }
        ?>">

        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre" value="<?php 
        
        if(isset($_POST["buscar"])&& isset($_POST["id"]) && !empty($_POST["id"])){        
                
            echo $row["Nombre"]; 
        
        }
        ?>">

        <label for="apellido">Apellido:</label>
        <input type="text" name="apellido" id="apellido" value="<?php 
        
        if(isset($_POST["buscar"])&& isset($_POST["id"]) && !empty($_POST["id"])){        
                
            echo $row["Apellido"]; 
        
        }
        ?>">

        <label for="direccion">Direccion:</label>
        <input type="text" name="direccion" id="direccion" value="<?php 
        
        if(isset($_POST["buscar"])&& isset($_POST["id"]) && !empty($_POST["id"])){        
                
            echo $row["Direccion"]; 
        
        }
        ?>">

        <?php
          
          if(isset($_POST["buscar"])&& isset($_POST["id"]) && !empty($_POST["id"])){
        
        ?>

        <label for="telefono">Teléfono:</label>
        <input type="text" name="telefono" id="telefono" value="<?php echo $row["Telefono"];?>">

        <label for="correo">Correo:</label>
        <input type="text" name="correo" id="correo" value="<?php echo $row["Correo"];?>">

        <label for="sexo">Sexo:</label>
        <input type="radio" name="sexo" id="sexo" <?php if($row["Sexo"]=="Femenino"){echo 'checked="checked"';}?> value="Femenino">Femenino
        <input type="radio" name="sexo" id="sexo" <?php if($row["Sexo"]=="Masculino"){echo 'checked="checked"';}?> value="Masculino">Masculino


        <label for="ecivil">Estado Civil:</label>
        <input type="radio" name="ecivil" id="ecivil" <?php if($row["Estado_civil"]=="casado" || $row["Estado_civil"]=="casada"){echo 'checked="checked"';}?> value="casado">Casado/a
        <input type="radio" name="ecivil" id="ecivil" <?php if($row["Estado_civil"]=="soltero" || $row["Estado_civil"]=="soltera"){echo 'checked="checked"';}?> value="soltero">Soltero/a
        <input type="radio" name="ecivil" id="ecivil" <?php if($row["Estado_civil"]=="divorciado" || $row["Estado_civil"]=="divorciada"){echo 'checked="checked"';}?> value="divorciado">divorciado/a
        <input type="radio" name="ecivil" id="ecivil" <?php if($row["Estado_civil"]=="viudo" || $row["Estado_civil"]=="viuda"){echo 'checked="checked"';}?> value="viudo">viudo/a


        
        <!-- <label for="peliculas">Seleccione Generos de Peliculas:</label>

         <input type="checkbox" name="peliculas[]" 
        <!-- <?php if(in_array('Acción',$peliculas)){echo 'checked="checked"';}?> -->
        
        <!-- id="peliculas" value="Acción"> Acción --> 
        <!-- <input type="checkbox" name="peliculas[]" -->
         <!-- <?php if(in_array('Terror',$peliculas)){echo 'checked="checked"';}?> -->
          <!-- id="peliculas" value="Terror"> Terror
        <input type="checkbox" name="peliculas[]" 
        <?php if(in_array('Aventuras',$peliculas)){echo 'checked="checked"';}?>
         id="peliculas" value="Aventuras"> Aventura
        <input type="checkbox" name="peliculas[]"
          <?php if(in_array('Ciencia-Ficcion',$peliculas)){echo 'checked="checked"';}?> 
          id="peliculas" value="Ciencia-Ficcion"> Ciencia Ficción -->
       -->


        <?php 
    
        }else{
    
        ?>

        <label for="telefono">Teléfono:</label>
        <input type="text" name="telefono" id="telefono" value="">

        <?php 
            
        }

        ?>

        <input type="submit" value="Actualizar" name="actualizar" id="actualizar">

    </form>

  

</body>
</html>