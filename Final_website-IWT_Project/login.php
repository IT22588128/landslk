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

<link rel="stylesheet"  href="style/log.css" /> 
    <div class="form">
        <h1>Log In</h1> 
    <form action="includes/login.inc.php" method="post">
        <input type="text" id="fname" name="uid" placeholder="Username">
        <input type="password" id="lname" name="pwd" placeholder="Password">
       <button name="submit" type="submit">Login</button>
       <input type="checkbox" checked="checked"> Remember me   
       <span class="psw">Forgot <a href="#">password?</a></span>
    </form>
    <p>Still don't have an account ? <a href= "register.php"><button name="signup" type="signup">Sign Up</button></a></p>
    </div>
<?php
    include_once 'footer.php';
?>