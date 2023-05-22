<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/login.css">
</head>
<body>

    <form action="registrar_usuario.php" method="post">

        <?php
            if(isset($_GET['mensaje'])&& !empty($_GET['mensaje'])){

                $mensaje = $_GET['mensaje'];
                echo "<div class='error'>";
                    echo $mensaje;
                echo "</div>";
            }           
                     
        ?>

        <h2>Formulario de Registro de Usuario</h2>

        <label for="user">Nombre de Usuario:</label>
        <input type="text" name="user" id="user" placeholder="Nombre de Usuario">
       
        <label for="pass">Escriba una Contraseña:</label>
        <input type="password" name="pass" id="pass" placeholder="Contraseña">
       
        <label for="pass2">Repetir la Contraseña:</label>
        <input type="password" name="pass2" id="pass2" placeholder="Repetir la Contraseña">
       
       
        <input type="submit" value="Registrarse" name="registrar">

    </form>
    
   

  
    </body>
</html>