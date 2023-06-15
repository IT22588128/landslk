<?php
session_start();

if (isset($_POST["lsubmit"])) {

    require_once 'dbh.inc.php';

    

    // Check if an image file is uploaded
    if (isset($_SESSION["userid"])) {

        $usersId = $_SESSION["userid"];
        $Sname = $_POST["Sname"];
        $email = $_POST["email"];
        $Sphone = $_POST["Sphone"];
        $Saddress = $_POST["Saddress"];
        $city = $_POST["city"];
        $price = $_POST["price"];
        $size = floatval($_POST['size']); 
        $description = $_POST['ldescription']; 


        $image = $_FILES["image"]["tmp_name"];
        $imgContent = file_get_contents($image);

        // Update the seller details and the image in the database
        $sql = "INSERT INTO lands(usersId , Sname, Sphone , email, Saddress , city , price ,size ,ldescription , photo) values (?,?,?,?,?,?,?,?,?,? );";
        $stmt = mysqli_stmt_init($conn);

        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: ../testUpdate.php?&error=stmtfailed");
            exit();
        }

        $stmt->bind_param("ssssssdsss",$usersId, $Sname, $Sphone, $email, $Saddress, $city, $price, $size, $description,$imgContent);
        $stmt->execute();
        header("Location: ../paymentOption.html?error=SUCCESS");
    } else {
         header("Location: ../home.php?error=setLandError");
    exit();
    }

   
} else {
    // Redirect to the login page or display an error message if the update button is not clicked
    header("Location: ../home.php?error=updatebuttonnotclicked");
    exit();
}
?>
