<link rel="stylesheet" href="style/approve.css">
<?php
session_start();

  require_once 'includes/dbh.inc.php';
  if($_SESSION["userType"] === 'admin')
  {

 
  if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
  }


  $sql = "SELECT usersId, landID, Sname, Sphone, email ,city,  price ,Saddress ,status FROM lands WHERE status = 'pending' ";
  $result = $conn->query($sql);
}
 



?>
  <div class="container">
    <h1>Land Ads Approval</h1>
    <table class="table">
      <thead>
        <tr>
          <th>Land ID</th>
          <th>Seller Name</th>
          <th>Email</th>
          <th>City</th>
          <th>status</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody>
      <?php 
           if ($result->num_rows > 0) 
           {

           while ($data = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td><center>" . $data["landID"] . "</center></td>";
            echo "<td><center>" . $data["Sname"] . "</center></td>";
            echo "<td><center>" . $data["email"] . "</center></td>";
            echo "<td><center>" . $data["city"] . "</center></td>";
            echo "<td><center>" . $data["status"] . "</center></td>";
            echo "<td><center><a href='includes/approve.inc.php?ids=".$data["landID"]."?sts=1'><button class='approve-btn' >Approve</button></a>&nbsp;&nbsp;<a href='includes/approve.inc.php?id=".$data["landID"]."?sts=0'><button class='reject-btn' onclick='confirmDelete()'>Reject</button></a></center></td>";
            echo "</tr>";
            }
           }
           $data = $result->fetch_assoc();

          
           
           ?>
      </tbody>
    </table>
  </div>
</body>
</html>
