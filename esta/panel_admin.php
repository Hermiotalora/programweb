<?php session_start();

$_SESION['usuario'];

if ($_SESION==NULL ||$SESION==""){

    echo "inicie sesion para ingresar";
    die();

} else{

    echo "bienvenidos $SESION ";
    echo "<br> <a href='cerrar_session.php'> Cerrar sesion </a>";
}

