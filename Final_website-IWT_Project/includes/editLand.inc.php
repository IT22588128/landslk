<?php
session_start();




if (isset($_POST['update'])) {
  require_once 'dbh.inc.php'; // Include your database connection file

  // Retrieve the form data
  $landID = $_GET['ids'];
  $Sname = $_POST['Sname'];
  $email = $_POST['email'];
  $Sphone = $_POST['Sphone'];
  $Saddress = $_POST['Saddress'];
  $city = $_POST['city'];
  $price = $_POST['price'];
  $size = floatval($_POST['size']); 
  $description = $_POST['description']; // Assuming description is a VARCHAR column

  $image = $_FILES["image"]["tmp_name"];
  $imgContent = file_get_contents($image);

  // Update the database record
  $sql = "UPDATE lands SET Sname=?, email=?, Sphone=?, Saddress=?, city=?, price=?, size=?, ldescription=?, photo=? WHERE landID=?";
  $stmt = $conn->prepare($sql);
  $stmt->bind_param("ssssssdsss", $Sname, $email, $Sphone, $Saddress, $city, $price, $size, $description,$imgContent, $landID);
  $stmt->execute();
  
  // Redirect to a success page or display a success message
  header("Location: ../landTable.php?SUCCESS");
} else {
  // Redirect to an error page or display an error message
  header("Location: ../landTable.php?UNSUCCESS");
  exit();
}

    

