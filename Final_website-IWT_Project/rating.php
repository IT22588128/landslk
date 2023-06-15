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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style/rating.css">
    <style>
        .checked {
            color: orange;
        }
    </style>

    <!-- Add icon library -->
    <div >
        <img id="image" src="src/e.jfif" width ="auto" height ="auto">
</div>

        <div>
        <img onclick = "change1()" src="src/f.jfif" width ="100px" height ="100px">
        <img onclick = "change2()" src="src/g.png" width ="100px" height ="100px">
        <img onclick = "change3()" src="src/h.png" width ="100px" height ="100px">
        </div>

        <script>
            function change1()
            {
                document.getElementById("image").src ="src/f.jfif";
            }
            function change2()
            {
                document.getElementById("image").src ="src/g.png";
            }
            function change3()
            {
                document.getElementById("image").src ="src/5.png";
            }
    
        </script>

         <label style="font-size: 54px;">4.9</label>
         <span class="fa fa-star checked"></span>
         <span class="fa fa-star checked"></span>
         <span class="fa fa-star checked"></span>
         <span class="fa fa-star"></span>
         <span class="fa fa-star"></span>


         <hr style="border:3px solid #f1f1f1">

         <div class="row">
             <div class="side">
                 <div>5 star</div>
             </div>
             <div class="middle">
                 <div class="bar-container">
                     <div class="bar-5"></div>
                 </div>
             </div>
             <div class="side right">
                 <div>150</div>
             </div>
             <div class="side">
                 <div>4 star</div>
             </div>
             <div class="middle">
                 <div class="bar-container">
                     <div class="bar-4"></div>
                 </div>
             </div>
             <div class="side right">
                 <div>63</div>
             </div>
             <div class="side">
                 <div>3 star</div>
             </div>
             <div class="middle">
                 <div class="bar-container">
                     <div class="bar-3"></div>
                 </div>
             </div>
             <div class="side right">
                 <div>15</div>
             </div>
             <div class="side">
                 <div>2 star</div>
             </div>
             <div class="middle">
                 <div class="bar-container">
                     <div class="bar-2"></div>
                 </div>
             </div>
             <div class="side right">
                 <div>6</div>
             </div>
             <div class="side">
                 <div>1 star</div>
             </div>
             <div class="middle">
                 <div class="bar-container">
                     <div class="bar-1"></div>
                 </div>
             </div>
             <div class="side right">
                 <div>20</div>
             </div>
         </div>

         <br><br><br>
         <table>
             <tr>
                 <td>
                     <label class="labe">Click the Stars to Rate Us </label>
                 </td>
            
                 <td>
                     <div class="rating" style="width: auto; ">
                         <input type="radio" id="star5" name="rating" value="5" /><label for="star5"></label>
                         <input type="radio" id="star4" name="rating" value="4" /><label for="star4"></label>
                         <input type="radio" id="star3" name="rating" value="3" /><label for="star3"></label>
                         <input type="radio" id="star2" name="rating" value="2" /><label for="star2"></label>
                         <input type="radio" id="star1" name="rating" value="1" /><label for="star1"></label>
                     </div>
                 </td>
             </tr>
         </table>
         <form></form>
         <h3>
            <br><br>
             Give Feedback
         </h3>
         <textarea rows="7" cols="45" placeholder="Description"></textarea><br><br><br>
         <input class="sub1" type="submit" value="submit">
         </form>



         <?php
    include_once 'footer.php';
?>
