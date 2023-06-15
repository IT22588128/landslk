
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
                    echo ' <a href="addLand.php">Sell Your Land</a>';
                }
                else{
                    echo ' <a href="login.php">Sell Your Land</a>';
                    
                }
                ?>
                

                <?php
            if( isset ($_SESSION["userid"] ))
                {
                  echo ' <a href="includes/logout.php">LOGOUT</a>';
                }
                else{
                    echo ' <a href="news.php">News</a>';
                    
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

<link rel="stylesheet" href="style/adminstyle.css">
<title>HOME</title>

</head>
<body>

<table border="0" class="fulltable">
  <tr>
  

    <td class="trr" rowspan ="4" style="width:80%;">
      <iframe src="profilesetting.php" name="iframe_a" height="500px" width="100%" title="Iframe Example"></iframe>
     
    </td>
  </tr>
  <tr>
      <td class="tdmain" style="width:20%; height:40px;"><center><br><a href="profilesetting.php" target="iframe_a"><button class="dashboad_btn">Update My Details</button></a></center><br></td>
      <td class="trr" rowspan="3" style="width:80%;">
      <iframe src="src/logo.png" name="iframe_a" height="400px" width="100%" title="Iframe Example"></iframe>
  </tr>
   <tr>
    <td class="tdmain" style="width:20%;"><center><br><a href="landTable.php" ><button class="dashboad_btn">&nbsp;&nbsp;&nbsp;&nbsp;Update Lands Details&nbsp;&nbsp;&nbsp;&nbsp;</button></a></center><br></td>
                
</td>
    </tr>

  <tr><td><p style="font-size: 56px; color:white;">S</p></td></tr>
  <tr><td><p style="font-size: 6px; color:white;">S</p></td></tr>
  <tr><td><p style="font-size: 2px; color:white;">S</p></td></tr>
  <tr><td><p style="font-size: 2px; color:white;">S</p></td></tr>
 
</table>
				
   


	
</body>
<html>		