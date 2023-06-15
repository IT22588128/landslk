<?php
    include_once 'header.php';
?>

<header>
        
		<nav class="navigation">
			<a href="home.php" class="active">Home</a>
			<a href="land.php" >Land</a>
			<a href="us.php">About Us</a>
			<a href="contact.php">Contact</a>
            <?php
            if( isset ($_SESSION["userid"] ))
                {
                  echo ' <a href="landTable.php">Edit Ad</a>';
                }
                else{
                    echo ' <a href="#">NEWS</a>';
                    
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

<link rel="stylesheet" href="style\addLand.css">

<title>Edit Land</title>

</head>
<body>

<?php

// Check if the seller details are available in the session
if (isset($_GET["ids"])) {
  
    require_once 'includes/dbh.inc.php';

    $landID = $_GET["ids"];
    $sql = "SELECT usersId, landID, Sname, Sphone, email ,city,  price ,Saddress ,ldescription ,size ,photo FROM lands WHERE landID = $landID ";
    $result = $conn->query($sql);

    $data = $result->fetch_assoc();



} else {
  // Redirect to the login page or display an error message if the seller details are not available
  header("Location: userProfile.php?error=notAddLandID");
  exit();

}


?>

<div class="container">
      <h1>UPDATE LAND DETAILS</h1>

      <form action="includes/editLand.inc.php?ids=<?=$data["landID"]?>" method="POST" enctype="multipart/form-data">
       <div class="form first">
          <div class="details personal">
            <span class="title"><b>Contact Information</b></span>

            <div class="fields">
              <div class="input-field">
                <label>Name:</label>
                <input type="text" name="Sname" value="<?php echo $data["Sname"]  ?>" required>
              </div>

              <div class="input-field">
                <label>E mail</label>
                <input type="text" name="email" value="<?php echo $data["email"]  ?>" required>
              </div>

              <div class="input-field">
                <label>Mobile number</label>
                <input type="text" name="Sphone"  value="<?php echo $data["Sphone"]  ?>" required>
              </div>              
            
            </div>
          </div>
          <div class="details personal">
            <span class="title"><b>Land Information</b></span>

            <div class="fields">
              <div class="input-field "style ="width:100%;">

                <label>Address</label>
                <input type="text" name="Saddress" value="<?php echo $data["Saddress"]  ?> " required>
              </div>

              <div class="input-field"style ="width:100%;">
                <label>Description</label>
                <input type="text" class="desc" name="description" value="<?php echo $data["ldescription"]  ?> "  rows="4" required></input>
              </div>

              <div class="input-field">
                <label>City</label>
                <input type="text" name="city" value="<?php echo $data["city"]  ?>" required>
              </div>

              <div class="input-field">
                <label>Extent(in perches)</label>
                <input type="text" name="size" value="<?php echo $data["size"]  ?>" required>
              </div>

              <div class="input-field">
                <label>Price (Per perch)</label>
                <input type="number" name="price" value="<?php echo $data["price"] ; ?>" required>
              </div>    
              <div class="input-field" >
                <label>Attach the survey plans and land images</label>
                <input type="file" name="image" value="<?php if(isset($data["photo"])){echo"'data:image/jpeg;base64,' . base64_encode($imageData)";}  ?>" required>
              </div>
            </div>
          </div>

        </div>
        <div class="submit">
       
        <button value="Update" name="update" type="submit">Update Now</button>
      </div>
      </form>
    </div>


       
   <?php
    include_once 'footer.php';
?>
