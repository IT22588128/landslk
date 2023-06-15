<?php
    include_once 'header.php';
?>

<header>
        
		<nav class="navigation">
			<a href="home.php" >Home</a>
			<a href="land.php" >Land</a>
			<a href="us.php">About Us</a>
			<a href="contact.php"class="active">Contact</a>
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
   <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<link rel="stylesheet" href="style\contact.css">
 
<title>Contact</title>

</head>
<body>
 

    <div class="contactUs">
        <div class="title">
            <h2>Get in Touch</h2>
        </div>
        <div class="box">

            <!-- Form -->
            <div class="contact form">
                <h3>Send a Message</h3>
                <form action="contact_contactus_function.php" method="POST">
                    <div class="formBox">
                        <div class="row50">
                            <div class="inputBox">
                                <span>First Name</span>
                                <input type="text" name="firstName" placeholder="John">
                            </div>
                            <div class="inputBox">
                                <span>Last Name</span>
                                <input type="text" name="lastName" placeholder="Doe">
                            </div>
                        </div>
                        <div class="row50">
                            <div class="inputBox">
                                <span>Email</span>
                                <input type="text" name="email" placeholder="Johndoe@gmail.com">
                            </div>
                            <div class="inputBox">
                                <span>Mobile</span>
                                <input type="text" name="mobile" placeholder="+94 789878690">
                            </div>
                        </div>
                        <div class="row100">
                            <div class="inputBox">
                                <span>Message</span>
                                <textarea name="message" placeholder="Write your message here..."></textarea>
                            </div>
                        </div>
                        <div class="row100">
                            <div class="inputBox">
                                <input type="submit" name="submit" value="Send">
                            </div>
                        </div>
                    </div>
                </form>
            </div>

            <!-- info Box -->
            <div class="contact info">
                <h3>Contact Info</h3>
                <div class="infoBox">  
                    <div>
                        <span><ion-icon name="location"></ion-icon></span>
                        <p>New Kandy Road, Malabe<br>Sri Lanka</p>
                    </div>
                    <div>
                        <span><ion-icon name="mail"></ion-icon></span>
                        <a href="mailto:lankaland@gmail.com">lankaland@gmail.com</a>
                    </div>
                    <div>
                        <span><ion-icon name="call"></ion-icon></span>
                        <a href="tel:+94789878690/+94119878690">+94 789 878 690 / +94 119 878 690</a>
                    </div>
                    <!-- Social Media Links -->
                    <ul class="sci">
                        <li><a href="#"><ion-icon name="logo-facebook"></ion-icon></a></li>
                        <li><a href="#"><ion-icon name="logo-twitter"></ion-icon></a></li>
                        <li><a href="#"><ion-icon name="logo-linkedin"></ion-icon></a></li>
                        <li><a href="#"><ion-icon name="logo-instagram"></ion-icon></a></li>
                    </ul>
                </div>
            </div>

            <!-- Map -->
            <div class="contact map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.84824901527!2d79.9662669!3d6.9087422000000105!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae257492a8df415%3A0x86555756df12115e!2sNew%20Kandy%20Rd%2C%20Malabe!5e0!3m2!1sen!2slk!4v1686246610311!5m2!1sen!2slk" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>

        </div>
    </div>


    <?php
    include_once 'footer.php';
?>
