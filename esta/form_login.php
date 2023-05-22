<form action="login.php" method="post">
   
    <?php
         if(isset($_GET('error'))){
            $error=$_GET('error');
                echo "<div class='error'>";
                echo $error;
                echo "</div>";
        } 
    ?>

    

    <label for="user">usuario</label>
    <input type="text" name="user" id="user">
    <label for="pass" >  password </label>
    <input type="password" name="pass" id="pass">
    <input type="submit" value="login" name="login" id="login">

</form>



<?php

if (isset($_GET['error'])){
    $error=$_GET['error'];

    if($error==0){
        echo "El usuario o contraseña son incorrectos";
    }
}