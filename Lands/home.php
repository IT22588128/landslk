<?php
    include_once 'header.php';
?>

<header>
        
		<nav class="navigation">
			<a href="home.php" class="active">Home</a>
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
            
        </nav> 
            
            <?php
                if( isset ($_SESSION["userid"] ))
                {
                    echo '<span class="pro"><a href="userProfile.php">Hello '.$_SESSION["usersname"].'</a></span>';
                }
                else{
                    echo '<button class="btnUser"><a href="login.php"><img src ="src\user.svg" alt="user" width="30px" height="20px" > </a></button>';
                    
                }
            ?>
            
    
</header>

<link rel="stylesheet" href="style\home.css">

<title>HOME</title>

</head>
<body>

   
        <h1 id ="topic1">LANKA LAND</h1>
        <h1 id ="dis1">FOR YOUR LANDS NEEDS</h1>
   
    <div class="topImg">
    
    <div class="slideshow-container">

        <div class="slide">
          <img src="src\land2.jpg" alt="Image 1">
        </div>
        <div class="slide">
          <img src="src\land1.jpg" alt="Image 2">
        </div>
        <div class="slide">
          <img src="src\land3.jpg" alt="Image 3">
        </div>
        <div class="slide">
            <img src="src\land4.jpg" alt="Image 4">
        </div>
        <div class="slide">
            <img src="src\land5.jpg" alt="Image 5">
        </div>
        <div class="slide">
            <img src="src\land6.jpg" alt="Image 6">
        </div>
        <div class="slide">
            <img src="src\land7.jpg" alt="Image 7">
        </div>
        <div class="slide">
            <img src="src\land8.jpg" alt="Image 8">
        </div>
        <div class="slide">
            <img src="src\land9.jpg" alt="Image 9">
        </div>
        <div class="slide">
            <img src="src\land10.jpg" alt="Image 10">
        </div>
          
      </div>
    




      
      
      <div class="searchBar"> 
        <input id="searchbar" onkeyup="search_land()" type="text" name="search" placeholder="Search ...">
        
        <select id="city">
           
               <option value=" ">Select City</option>
               <option value="kegalle">Kegalle</option>
               <option value="mahawela">Mahawela</option>
               <option value="chilaw">Chilaw</option>
               <option value="karapitiya">Karapitiya</option>
               <option value="kamburugamuwa">Kamburugamuwa</option>
               <option value="malabe">Malabe</option>
               <option value="hikkaduwa Eliya">Hikkaduwa</option>
               <option value="nakkawatta">Nakkawatta</option>
               <option value="mirigama">Mirigama</option>
               <option value="padukka">Padukka</option>
               <option value="wennappuwa">Wennappuwa</option>
               <option value="hikkaduwa">Hikkaduwa</option>
               <option value="kandy">Kandy</option>
           </select>
           <button onclick="search_land()"  id="searchBtn">Search</button>
           
       </div>

        
        
        
        
        
	
    <div class = lands>
        
        <div class = l1 >
            <div class = text>
                <p>Available</p>
            </div>
            <img src ="src\lnd1.webp"  width ='400px' hight = '800px'>
            <div class="intro"> 
                <span>See more details</span>
                <p>Contact - 0778632020</p>
                <p>Email - sample@gmail.com</p>
                <p>Province - Southern Province</p>
                <p>District - Galle</p>
                <p>City - Hikkaduwa</p>
            </div>
            <span>Center Point</span>
            <p> <img src ="src\dollar.png"> LKR 110000 onward</p>
            <p> <img src ="src\puzzle.png">Available blocks - 0 </p>
            <p> <img src ="src\location.png">Hikkaduwa            </p>
                
        </div>


        <div class = l1 >
            <div class = text>
                <p>Available</p>
            </div>
            <img src ="src\lnd2.webp"  width ='400px' hight = '800px'>
            <div class="intro"> 
                <span>See more details</span>
                <p>Contact - 0778632020</p>
                <p>Email - sample@gmail.com</p>
                <p>Province - North Western Province</p>
                <p>District - Puttalama</p>
                <p>City - Wennappuwa</p>
            </div>
            <span>Florence City</span>
            <p> <img src ="src\dollar.png"> LKR 285000 onward </p>
            <p> <img src ="src\puzzle.png">Available blocks - 2</p>
            <p>  <img src ="src\location.png">Wennappuwa   </p>
        </div>


        <div class = l1 id="srce" ></p>
            <div class = text></p>
                <p>Available</p>
            </div>
            <img src ="src\lnd3.webp" width ='400px' hight = '800px'>
            <div class="intro"> 
                <span>See more details</span>
                <p>Contact - 0778632020</p>
                <p>Email - sample@gmail.com</p>
                <p>Province - Western Province</p>
                <p>District - Colombo</p>
                <p>City - Padukka</p>
            </div>
            <span>Green City</span>
            <p> <img src ="src\dollar.png"> LKR 450000 onward </p>
            <p>     <img src ="src\puzzle.png">Available blocks - 1 </p>
            <p>  <img src ="src\location.png">Padukka</p>
        </div>


        <div class = l1 id="srce" >
            <div class = text>
                <p>Available</p>
            </div>
            <img src ="src\lnd4.webp" width ='400px' hight = '800px'>
            <div class="intro"> 
                <span>See more details</span>
                <p>Contact - 0778632020</p>
                <p>Email - sample@gmail.com</p>
                <p>Province - Western Province</p>
                <p>District - Gampaha</p>
                <p>City - Mirigama</p>
            </div>
            <span>Highway Field</span>
            <p> <img src ="src\dollar.png"> LKR 145000 onward </p>
            <p><img src ="src\puzzle.png">Available blocks - 2 </p>
            <p>  <img src ="src\location.png">Mirigama</p>
        </div>


        <div class = l1 id="srce" >
            <div class = text style="background-color: rgb(255, 153, 1);">
                <p >Sold Out</p>
            </div>
            <img src ="src\lnd5.webp" width ='400px' hight = '800px'>
            <div class="intro"> 
                <span>See more details</span>
                <p>Contact - 0778632020</p>
                <p>Email - sample@gmail.com</p>
                <p>Province - North Western</p>
                <p>District - Nakkawatta</p>
                <p>City - Nakkawatta</p>
            </div>
            <span>Kingsbury Park</span>
            <p> <img src ="src\dollar.png"> LKR 200000 onward </p>
            <p>  <img src ="src\puzzle.png">Available blocks - 3 </p>
            <p>  <img src ="src\location.png">Nakkawatta</p>
        </div>


        <div class = l1 id="srce" >
            <div class = text ">
                <p >Available</p>
            </div>
            <img src ="src\lnd6.webp" width ='400px' hight = '800px'>
            <div class="intro"> 
                <span>See more details</span>
                <p>Contact - 0778632020</p>
                <p>Email - sample@gmail.com</p>
                <p>Province - Southern Province</p>
                <p>District - Galle</p>
                <p>City - Hikkaduwa</p>
            </div>
            <span>Kapri Island</span>
            <p> <img src ="src\dollar.png"> LKR 850000   onward </p>
            <p>  <img src ="src\puzzle.png">Available blocks - 15 </p>
            <p>  <img src ="src\location.png">Hikkaduwa</p>
        </div>



    </div>



<div>
    <h1 id ="topic1">MOVE IN</h1>
        <h1 id ="dis2">Lands That Exceeds Your Expectations!</h1>
</div>
<br>
   <br>


   
   <?php
    include_once 'footer.php';
?>
