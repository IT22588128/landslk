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


 <link rel="stylesheet" href="styles/signup.css">
         <style type="text/css">


    input[type=text],[type =password], select, textarea {
        width: 100%;
        padding: 12px;
        border: 1px solid #ccc;
        border-radius: 18px;
        box-sizing: border-box;
        margin-top: 6px;
        margin-bottom: 16px;
        resize: vertical;
    }

    input[type=submit] {
        background-color: #750000;
        color: white;
        padding: 12px 20px;
        border: none;
        border-radius: 12px;
        cursor: pointer;
    }

        input[type=submit]:hover {
            background-color: #9d0650;
        }

    .containerco {
        border-radius: 17px;
        background-color: #f2f2f2;
        padding: 70px;
        margin: 26px;
    }
    
    .topics {
    color: #2a9662;
    font-size: 34px;
    font-weight: bold;
    font-family: 'Shrikhand', sans-serif;
   
}
button.submit {
    /* Add your styles here */
    background-color: #17741a;
    color: white;
    border: none;
    padding: 10px 20px;
    border-radius: 4px;
    cursor: pointer;
  }
  
  button.submit:hover {
    background-color: #709c75;
  }
  button[name="submit"] {
    padding: 10px 20px;
    background-color: #2a9662;
    color: #fff;
    border: none;
    cursor: pointer;
  }
  
  button[name="submit"]:hover {
    background-color: #1bad64;
  }
</style>
    <div class="form">
    <center><p class="topics">Register </p></center>
    <form action="includes/register.inc.php"method="post">
    <table>
            <tr>
    <td style="width: 40%;"><center><img src="src/si.png" alt="IMG" style="width: 80%; height:650px;"></center></td>
                <td style="width: 60%;">

                    <div class="containerco">
                    <label for="fname">Name</label>
                    <input type="text" id="fname" name="name" placeholder="Name" required>

                    <label for="lname">Email</label>
                    <input type="text" id="lname" name="email" placeholder="Email" required>

                    <label for="email">NIC</label>
                    <input type="text" id="email" name="nic" placeholder="NIC" required>

                    <label for="uname">User Name</label>
                    <input type="text" id="uname" name="uid" placeholder="Username" required>

                    <label for="pwd">Password</label>
                    <input type="password" id="pwd" name="pwd" placeholder="Password" required>

                    <label for="pwdrepeat">Repeat Password</label>
                    <input type="password" id="pwdrepeat" name="pwdrepeat" placeholder="Repeat Password" required>

       
       <button name="submit" type="submit">Register</button>
    </td>
</tr>
</table>
    </form>
        <center><p>Already have an Account? <a href= "login.php">Log in.</p></center>
    </div>
<?php
    include_once 'footer.php';
?>