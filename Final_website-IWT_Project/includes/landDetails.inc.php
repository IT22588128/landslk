<?php
 session_start();
if(isset($_POST["update"]))
{

    require_once 'function.inc.php';
    require_once 'dbh.inc.php';

    $Sname = $_POST["Sname"];
    $email = $_POST["email"];
    $Sphone = $_POST["Sphone"];
    $Saddress = $_POST["Saddress"];
    $city = $_POST["city"];
    $price = $_POST["price"];

   // $photo = $_FILES['photo']['tmp_name'];
   // $imgContent = file_get_contents($photo);
   $image = $_FILES['image']['tmp_name'];
    $imageData = file_get_contents($image);


    $sql = "INSERT INTO lands(usersId , Sname, Sphone , email, Saddress , city , price , photo) values (?,?,?,?,?,?,?,? );";
    $stmt = mysqli_stmt_init($conn);

    if (!mysqli_stmt_prepare($stmt , $sql))
    {
        header ("Location: ../landDetails.php?error=stmtfailed");
        exit();
    }


    mysqli_stmt_bind_param($stmt, "isisssib", $_SESSION["userid"], $Sname , $Sphone , $email , $Saddress , $city , $price ,$imageData  );
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("Location: ../login.php?error=none");
    exit();


}