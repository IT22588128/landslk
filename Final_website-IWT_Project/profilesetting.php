<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Eagle.LK</title>
 
    <script src="https://kit.fontawesome.com/9e8c18e993.js" crossorigin="anonymous"></script>

    <style type="text/css">
        
.topics {
    color: black;
    font-size: 34px;
    font-weight: bold;
    font-family: 'Shrikhand', sans-serif;
    /*margin: 29px 20px 10px 40px;  Specify margins: top right bottom left */
}

.save-profile {
    background-color: #2a9662;
    color: #fff;
    border-radius: 10px;
    height: 30px;
    width: 100px;
}

.topics {
    color: #2a9662;
    font-size: 34px;
    font-weight: bold;
    font-family: 'Shrikhand', sans-serif;
    /*margin: 29px 20px 10px 40px;  Specify margins: top right bottom left */
}



input[type=text], select, textarea {
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
    background-color: #047500;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 12px;
    cursor: pointer;
}

    input[type=submit]:hover {
        background-color: #069d13;
    }

.containerco {
    border-radius: 17px;
    background-color: #f2f2f2;
    padding: 70px;
    margin: 26px;
}
    </style>

</head>

<body>
    <?php
        session_start();
    


    if (isset($_SESSION["userid"])) {
  
    require_once 'includes/dbh.inc.php';

    $uid = $_SESSION["userid"];
    $sql = "SELECT *  FROM users WHERE usersId  = $uid ";
    $result = $conn->query($sql);

    $data = $result->fetch_assoc();



} else {
  header("Location: userProfile.php?error=noUser");
  exit();

}


?>

  
<center><p class="topics">Profile Setting</p></center>
        <table>
            <tr>
                <td style="width: 40%;"><center><img src="src/profilesetting.jpg" alt="IMG" style="width: 90%; height:650px;"></center></td>
                <td style="width: 60%;">

                    <div class="containerco">
                    <form action="includes/editUser.inc.php" method="POST" enctype="multipart/form-data">
                            <label for="fname">User Name</label>
                            <input type="text" id="fname" name="uid"  value="<?php echo $_SESSION["useruid"]  ?>" disabled >

                            <label for="lname">Name</label>
                            <input type="text" id="lname" name="name"  value="<?php echo $data["usersName"]  ?>">

                            <label for="email">Your Email</label>
                            <input type="text" id="yemail" name="email"  value="<?php echo $data["usersEmail"]  ?>" disabled>

                            <label for="nic">Your NIC</label>
                            <input type="text" id="mobilenumber" name="nic"  value="<?php echo $data["NIC"]  ?>" disabled>

                            <label for="phone">Mobile Number</label>
                            <input type="text" id="mobilenumber" name="phone"  value="<?php echo $data["phone"]  ?>" placeholder="Your Mobile Number..">

                            <label for="address">Address</label>
                            <input type="text" id="address" name="address"  value="<?php echo $data["address"]  ?>" placeholder="Your Address..">

                            

                            <button type="submit" class="save-profile" name="update" value="Update">Save Profile</button>
                        </form>
                    </div>


                </td>
            </tr>
        </table>

        </div>

        </div>


</body>
</html>	