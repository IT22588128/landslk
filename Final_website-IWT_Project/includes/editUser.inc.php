<?php
session_start();




if (isset($_POST['update'])) {
  require_once 'dbh.inc.php'; // Include your database connection file

  // Retrieve the form data
  $uid = $_SESSION['userid'];
  $name = $_POST['name'];
 // $email = $_POST['email'];
 // $nic = $_POST['nic'];
  $phone = $_POST['phone'];
  $address = $_POST['address'];

  // Update the database record
  $sql = "UPDATE users SET usersName='$name', phone='$phone', address='$address' WHERE usersId = '$uid' ";
  $stmt = $conn->prepare($sql);
 // $stmt->bind_param("sisi", $name, $phone, $addres, $uid);
  $stmt->execute();
  
  // Redirect to a success page or display a success message
  header("Location: ../profilesetting.php?SUCCESS?ph='$uid'");
} else {
  // Redirect to an error page or display an error message
  header("Location: ../profilesetting.php?UNSUCCESS");
  exit();
}

    

