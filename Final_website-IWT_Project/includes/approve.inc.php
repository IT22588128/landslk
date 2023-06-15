<?php
  // includes/approve.inc.php
  
  require_once 'dbh.inc.php';
  
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  
  if (isset($_GET['ids']) ) 
  {
    $landID = $_GET['ids'];
    $Sname='Approved';
    $sql = "UPDATE lands SET status=? WHERE landID=?";
    
 
   

    }
    else if (isset($_GET['id']) ) 
    {

    $landID = $_GET['id'];
    $Sname='Rejected';
    $sql = "UPDATE lands SET status=? WHERE landID=?";
   
    }
    
  
    else{
        header("Location: ../approve.php?UNSUCCESS");
    }
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $Sname, $landID);
    $stmt->execute();
    $conn->close();
    header("Location: ../approve.php?SUCCESS");
?>
