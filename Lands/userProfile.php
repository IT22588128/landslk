<?php
    include_once 'header.php';
?>

<header>
        
		<nav class="navigation">
			<a href="home.php" >Home</a>
			<a href="land.php" >Land</a>
			<a href="#">About Us</a>
			<a href="#">Contact</a>
            <a href="#">News</a>
            <?php
                if( isset ($_SESSION["userid"] ))
                {
                    echo ' <a href="landForm.php">Sell Your Land</a>';
                }
                else{
                    echo ' <a href="login.php">Sell Your Land</a>';
                   
                }
            ?>
            <a href="includes/logout.php">LOGOUT</a>
            
		</nav>
    
</header>

<link rel="stylesheet" href="style\userProfile.css">

<title>User Profile</title>

</head>
<body>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<div class="card">
  <img src="src/user2.png" alt="profilePhoto" style="width:100%">
  <?php
echo '<h1>'.$_SESSION["usersname"].'</h1>';
?>
  <p class="title">CEO & Founder, Example</p>
  <p>Harvard University</p>
  <a href="#"><i class="fa fa-dribbble"></i></a>
  <a href="#"><i class="fa fa-twitter"></i></a>
  <a href="#"><i class="fa fa-linkedin"></i></a>
  <a href="#"><i class="fa fa-facebook"></i></a>
  <p><button>Contact</button></p>
</div>

<?php
    include_once 'footer.php';
?>
