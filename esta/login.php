<?php

    session_start();

    include("conectarlogin.php");

  
    
   //     if (isset($_POST['login'])&& isset ($_POST['usuario'])&& isset ($_POST['pass'])){

   //     funcion  validar[$datos]{
   //       $datos=trim($datos);
   //       $datos=addcslashes($datos);
   //       $datos=htmlentities($datos);
   //       return $datos;
   //    }

   //    $usuario = validar($_POST ['usuario']);
   //    $contrasenia= validar($_POST ['pass']);


   //    if(empty($usuario)){
   //       header("location:form.login.php?error=Elusuarioesrequerido");
   //       exit();

   //    }elseif(empty($contrasenas)){
   //       header("locartion:form_login.php?error=la contraseña es requerida");
   //       exit();
   //    }else{

   //    $link=($noat,$user,$ pass,$db) or die ("Problemas para conectar");
   //    if(!link){
   //       echo "problemas para conectar con la base de datos";
   //    }
   //    $select="SELECT * From usuarios WHERE usuarios='usuario' AND pass='$contrasena";

   //    $select=mysqli_query($link,$select);

   //    }if (mysqli_num_rows($result)===1){
   //       $now= mysqli_fetch_array($result);

   //       if($row['usuario']===$usuario && $row['usuario']=== $contrasena){

   //             $_SESSION['usuario']=$row['usuario'];
   //             header("location:panel_admin.php");
   //             exit();
         
   //       }else{
   //          header("location:form_login.php?error=la contrasela es incorrecta");
   //          exit();
   //       }
   //    }
   // }
      






    if(isset($_POST['user'])&& isset ($_POST['pass'])&&
        isset($_POST['login'])){

            $usuario=$_POST['user'];
            $contrasenas=$_POST['pass'];

            $link=mysqli_connect($host, $user,$pass,$db)  or die ('problemas');


         if($link){

            echo "conexion exitosa";
            
         }else{
            echo "problemas para conectar";
         }


         // if(!$link){
         // echo "Problemas para conectar";
         // }



            $select="SELECT * FROM usuarios WHERE usuario='$usuario'
            AND pass='$contrasenas'";

            $result =mysqli_query($link, $select);
            $num_rows=mysqli_num_rows($result);

         if($num_rows ==1){

            $_SESSION ['usuario']=$usuario;
            header("location:panel_admin.php");
         }else{

            $error=0;
            header("location:form_login.php?error=$error");
         }


         //    echo "<br> bienvenido : $usuario ";

         // }else{
         //    echo "usuario no registrado";

         //     }
                
        }

