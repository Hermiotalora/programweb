<?php
    include("conectar.php");

    if(isset($_POST["registrar"])&& isset($_POST["user"])&& isset($_POST["pass"])){

        function validar($datos){

            $datos = trim($datos);
            $datos = addslashes($datos);
            $datos = htmlentities($datos);
            return $datos;

        }

        $usuario = validar($_POST["user"]);

        $contrasena = validar($_POST['pass']);

        $contrasena2 = validar($_POST["pass2"]);
      

        if(empty($usuario)){

            header("location:form_registro.php?mensaje=El usuario es requerido");
            exit();
        }else if(empty($contrasena)){

            header("location:form_registro.php?mensaje=La contraseña es requerida");
            exit();

        }else if(empty($contrasena2)){

            header("location:form_registro.php?mensaje=Debe repetir la contraseña");
            exit();

        }else if($contrasena != $contrasena2){

            header("location:form_registro.php?mensaje=Las contraseñas no coinciden, vuelva a escribir las contraseñas");
            exit();

        }else{

            $link = mysqli_connect($host, $user, $pass, $db) or die("Problemas para conectar a la base de datos");

            if(!$link){
                echo "Problemas para conectar con la base de datos";
            }

            $select = "SELECT * FROM usuarios WHERE User = '$usuario'";

            $result = mysqli_query($link,$select);

            if(mysqli_num_rows($result)>0){

                $row = mysqli_fetch_array($result);
                if($row['User'] === $usuario){
                    
                    header("location:form_registro.php?mensaje=El usuario elegido ya existe, seleccione otro nombre de usuario");
                    exit();

                }

            }else{

                //si pasa todas las validaciones entonces registramos el usuario

                $register = "INSERT INTO usuarios(User, Pass)VALUES ('$usuario', '$contrasena')";
                
                $result2 = mysqli_query($link, $register);

                if(!$result2){
                    echo "Problemas para registrar el usuario";
                }

                header("location:form_registro.php?mensaje=El usuario a sido registrado con exito");
                
                //echo "<br><br> $register" ;

            }

        }

        

    }



?>