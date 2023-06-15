<?php
session_start();




if (isset($_POST['update'])) {
  require_once 'dbh.inc.php'; 
 
  $uid = $_SESSION["temp"];
  $id = $_POST['uid'];
  $name = $_POST['name'];
  $email = $_POST['email'];
  $nic = $_POST['nic'];
  $phone = $_POST['phone'];
  $address = $_POST['address'];
  
  
  $sql = "UPDATE users SET usersUid  = '$id ',usersName='$name',NIC = '$nic',usersEmail = '$email', phone='$phone', address='$address' WHERE usersId = '$uid' ";
  $stmt = $conn->prepare($sql);
 // $stmt->bind_param("sisi", $name, $phone, $addres, $uid);
  $stmt->execute();
  
  
  header("Location: ../profilesettingAdmin.php?id=".$uid." ");
} else {
 
  header("Location: ../profilesettingAdmin.php?UNSUCCESS");
  exit();
}

unset($_SESSION["temp"]);
    

