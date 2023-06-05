<?php

if(isset($_POST["submit"]))
{
    
    $userName = $_POST["uid"];
    $pwd = $_POST["pwd"];

    require_once 'dbh.inc.php';
    require_once 'function.inc.php';


    loginuser($conn ,$userName , $pwd);
}


else{
    header ('Location: ../login.php?error=notsubmit');
}
