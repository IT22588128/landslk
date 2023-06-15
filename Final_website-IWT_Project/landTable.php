<?php
    include_once 'header.php';
?>

<header>
        
		<nav class="navigation">
			<a href="home.php" class="active">Home</a>
			<a href="land.php" >Land</a>
			<a href="#us.php">About Us</a>
			<a href="contact.php">Contact</a>
            <?php
            if( isset ($_SESSION["userid"] ))
                {
                  echo ' <a href="landTable.php">Edit Ad</a>';
                }
                else{
                    echo ' <a href="#">News</a>';
                    
                }
                ?>
            
            <?php
                if( isset ($_SESSION["userid"] ))
                {
                    echo ' <a href="addLand.php">Sell Your Land</a>';
                }
                else{
                    echo ' <a href="login.php">Sell Your Land</a>';
                    
                }
                ?>
            
        </nav> 
            
            <?php
                if( isset ($_SESSION["userid"] ))
                {
                    if(  ($_SESSION["userType"] ) === 'user'  )
                    {
                    echo '<span class="pro"><a href="userProfile.php">Hello '.$_SESSION["usersname"].'</a></span>';
                }
                else if  (  ($_SESSION["userType"] ) === 'admin'  )
                {
                    echo '<span class="pro"><a href="superadmin.html">Hello '.$_SESSION["userType"].'</a></span>'; 
                }
            }
                else{
                    echo '<button class="circle-button"><a href="login.php"><center><i class="far fa-user-circle" style="z-index: 9990; font-size:36px;color:white;"viewport></i></center></a></button>';
                    
                }
                
            ?>
            
    
</header>


<link rel="stylesheet" href="style/landTable.css">
<title>LAND DETAILS</title>
</head>
<body>
<?php

if (isset($_SESSION["userid"]))
{
  $uid = $_SESSION["userid"];
  require_once 'includes/dbh.inc.php';
  
  if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
  }

  $sql = "SELECT usersId, landID, Sname, Sphone, email ,city,  price ,Saddress ,status FROM lands WHERE usersId= '$uid' ";
  $result = $conn->query($sql);

 

}

?>

  <h1>Posted Land Details</h1>
  
  <table class="table">
    <thead>
      <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Phone Number</th>
        <th>Address</th>
        <th>City</th>
        <th>Price</th>
        <th>Status</th>
      </tr>
    </thead>
    <tbody>
      <?php 
           if ($result->num_rows > 0) 
           {

           while ($data = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td><center>" . $data["Sname"] . "</center></td>";
            echo "<td><center>" . $data["email"] . "</center></td>";
            echo "<td><center>" . $data["Sphone"] . "</center></td>";
            echo "<td><center>" . $data["Saddress"] . "</center></td>";
            echo "<td><center>" . $data["city"] . "</center></td>";
            echo "<td><center>" . $data["price"] . "</center></td>";
            echo "<td><center>" . $data["status"] . "</center></td>";
            echo "<td><center><a href='editLand.php?ids=".$data["landID"]."'><button class='reject-btn' >Update</button></a>&nbsp;&nbsp;<a href='includes/deleteLand.inc.php?id=".$data["landID"]."'><button class='approve-btn' onclick='confirmDelete()'>Delete</button></a></center></td>";
            echo "</tr>";
            }
           }
           $data = $result->fetch_assoc();

          
           
           ?>
      
    </tbody>
  </table>
  </form>
  <script>
  function confirmDelete() {
    if (confirm("Do you want to delete?")) {

      document.forms[0].submit();
    } else {
      document.forms[1].submit();
    }
  }
</script>
  <?php
    include_once 'footer.php';
?>
