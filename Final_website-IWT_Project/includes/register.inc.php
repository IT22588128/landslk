<?php

if(isset($_POST["submit"]))
{


    $name = $_POST["name"];
    $email = $_POST["email"];
    $userName = $_POST["uid"];
    $pwd = $_POST["pwd"];
    $pwdRepeat = $_POST["pwdrepeat"];
    $nic = $_POST["nic"];

    require_once 'dbh.inc.php';
    require_once 'function.inc.php';


    $invalidUid = validUid($userName);
    $invalidEmail = validMail($email);
    $pwdMatch = passwordMatch($pwd , $pwdRepeat);
    $uidExists = uidExists( $conn , $userName , $email);


    if(  $invalidEmail !== true )
    {
        header ('Location: ../register.php?error=invalidemail');
        exit();
    }

    if(  $invalidUid !== true )
    {
        header ('Location: ../register.php?error=invaliduid');
        exit();
    }

    if( $pwdMatch !== true )
    {
        header ('Location: ../register.php?error=passwordsdontmatch');
        exit();
    }

    if( $uidExists !== true )
    {
        header ('Location: ../register.php?error=usernametaken');
        exit();
    }
    

    createUser($conn , $name , $email , $userName , $pwd ,$nic);

}
else{
    header ('Location: ../register.php?error=notsubmit');
    exit();
}
