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
                    echo ' <a href="news.php" class="active">News</a>';
                    
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

<link rel="stylesheet"  href="style/about.css" /> 
<section class = "about">

<div >
        <img id="image" src="src/a.jpg" width ="auto" height ="auto">
</div>

        <div>
        <img onclick = "change1()" src="src/b.jpg" width ="100px" height ="100px">
        <img onclick = "change2()" src="src/c.jpg" width ="100px" height ="100px">
        <img onclick = "change3()" src="src/d.jpg" width ="100px" height ="100px">
        </div>

        <script>
            function change1()
            {
                document.getElementById("image").src ="src/b.jpg";
            }
            function change2()
            {
                document.getElementById("image").src ="src/c.jpg";
            }
            function change3()
            {
                document.getElementById("image").src ="src/d.jpg";
            }
    
        </script>

<div class="main">
        <div class="about-text">
            <h1>About Us</h1>
            <p>Welcome to our Online Land Sale System. We are dedicated to providing a convenient platform for buying and selling land online.</p>
            
            <h2>Our Mission</h2>
            <p>Our mission is to simplify the process of land transactions by connecting buyers and sellers in a user-friendly and transparent manner. We aim to revolutionize the real estate industry by offering a seamless online experience.</p>
      
            <h2>Our Team</h2>
            <p>We have a team of experienced professionals who are passionate about real estate and technology. Our team works tirelessly to ensure that our platform meets the needs of both buyers and sellers.</p>
      
            <button type = "button" class="btn"> let's Talk </button>
    </div>
</div>
</section>

<?php
    include_once 'footer.php';
?>
