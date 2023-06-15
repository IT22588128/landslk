<?php
    include_once 'header.php';
?>

<header>
        
		<nav class="navigation">
			<a href="home.php" >Home</a>
			<a href="land.php" >Land</a>
			<a href="us.php">About Us</a>
			<a href="contact.php">Contact</a>
            <?php
            if( isset ($_SESSION["userid"] ))
                {
                  echo ' <a href="landTable.php">Edit Ad</a>';
                }
                else{
                    echo ' <a href="news.php">News</a>';
                    
                }
                ?>
            
            <?php
                if( isset ($_SESSION["userid"] ))
                {
                    echo ' <a href="addLand.php" class="active">Sell Your Land</a>';
                }
                else{
                    echo ' <a href="login.php" class="active">Sell Your Land</a>';
                    
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

<title>Add Land</title>

</head>
<body>


  <div class="container">
      <h1 >SELL YOUR LANDS</h1>

      <form action="includes/addLand.inc.php?" method="POST" enctype="multipart/form-data">
        <div class="form first">
          <div class="details personal">
            <span class="title"><b>Contact Information</b></span>

            <div class="fields">
              <div class="input-field">
                <label>Full Name</label>
                <input type="text" name="Sname" placeholder="Enter your name" required>
              </div>

              <div class="input-field">
                <label>E mail</label>
                <input type="text" name="email" placeholder="Enter your Email" required>
              </div>

              <div class="input-field">
                <label>Mobile number</label>
                <input type="number" name="Sphone" placeholder="Enter Telephone number" required>
              </div>              
            
            </div>
          </div>
          <div class="details personal">
            <span class="title"><b>Land Information</b></span>

            <div class="fields">
              <div class="input-field "style ="width:100%;">

                <label>Address</label>
                <input type="text" name="Saddress" placeholder="Address" required>
              </div>

              <div class="input-field"style ="width:100%;">
                <label>Description</label>
                <textarea id="address" placeholder="Description" name="ldescription" rows="4" required></textarea>
              </div>

              <div class="input-field">
                <label>City</label>
                <input type="text" name="city" placeholder="City" required>
              </div>

              <div class="input-field">
                <label>Extent(in perches)</label>
                <input type="text" name="size" placeholder="Extent(in perches)" required>
              </div>

              <div class="input-field">
                <label>Price (Per perch)</label>
                <input type="text" name="price" placeholder="Price (Per perch)" required>
              </div>    
              <div class="input-field" >
                <label>Attach the survey plans and land images</label>
                <input type="file" name="image"  required>
              </div>
            </div>
          </div>

        </div>
        <div class="submit">
        <button name="lsubmit" type="submit">Sumbit now</button>
      </div>
      </form>
    </div>

    
       
   <?php
    include_once 'footer.php';
?>
