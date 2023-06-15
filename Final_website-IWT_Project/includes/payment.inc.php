<?php 

include "dbh.inc.php";

 
    $fullname =$_POST['fullname'];
    $email = $_POST['email'];
    $address =$_POST['address'];
    $city =$_POST['city'];
    $state =$_POST['state'];
    $zipid =$_POST['zipcode'];
    $cardnumber =$_POST['cardnumber'];
    $expmonth =$_POST['expmonth'];
    $expyear =$_POST['expyear'];
    $cvv =$_POST['cvv'];

    $sql = "insert into payment(FullName,Email,Address,City,State,ZipCode,CardNumber,Month,ExYear,CVV) values(?,?,?,?,?,?,?,?,?,?)";
    $statment = $conn->prepare($sql);

    $statment->bind_param("sssssiiiii",$fullname,$email,$address,$city,$state,$zipid,$cardnumber,$expmonth,$expyear,$cvv);

    if($statment->execute()){
    header('Location:../landTable.php');
    }
    else{
    echo 'insert data error';
    }
    ?>

   

