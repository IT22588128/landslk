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
                    echo ' <a href="news.php">News</a>';
                    
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


<style>
  body {
    font-family: 'Times New Roman', Times, serif, sans-serif;
    background-color: #84eddb;
  }
  
  .container {
    max-width: 800px;
    margin: 0 auto;
    padding: 40px;
    background-color: #fff;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    margin-bottom:40px;
  }
  
  h1 {
    color: #333;
  }
  
  p {
    margin-bottom: 20px;
  }
  
  .contact-info {
    margin-top: 40px;
    text-align: center;
  }
  
  .contact-info p {
    margin-bottom: 10px;
  }
  
  .contact-info a {
    color: #333;
    text-decoration: none;
  }
  
  .contact-info a:hover {
    text-decoration: underline;
  }
</style>

<title>support</title>

</head>
<body>

  <div class="container">
    <h1>Support</h1>
    
    <p>If you have any questions or need assistance with our online land sale system, please don't hesitate to contact our support team.</p>
    
    <div class="contact-info">
      <p><B>Support Email: </B><a href="mailto:support@lankaland.com">support@lankaland.com</a></p>
      <p><B>Phone: </B><a href="tel:+94789878690/+94119878690">+94 789 878 690/+94 119 878 690</a></p>
      <p><B>Hours: </B>Monday to Friday, 9:00 AM - 5:00 PM</p>
    </div>
  </div>

  
         
  <?php
    include_once 'footer.php';
?>
