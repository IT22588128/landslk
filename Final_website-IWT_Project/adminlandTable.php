<link rel="stylesheet" href="style/landTable.css">
<?php

session_start();

if($_SESSION["userType"] === 'admin')
{

  require_once 'includes/dbh.inc.php';
  
  if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
  }

  $sql = "SELECT usersId, landID, Sname, Sphone, email ,city,  price ,Saddress ,status FROM lands";
  $result = $conn->query($sql);

 

}

?>

  <h1>Posted Land Details</h1>
  
  <table class="table">
    <thead>
      <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Phone Number</th>
        <th>Address</th>
        <th>City</th>
        <th>Price</th>
        <th>Status</th>
      </tr>
    </thead>
    <tbody>
      <?php 
           if ($result->num_rows > 0) 
           {

           while ($data = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td><center>" . $data["Sname"] . "</center></td>";
            echo "<td><center>" . $data["email"] . "</center></td>";
            echo "<td><center>" . $data["Sphone"] . "</center></td>";
            echo "<td><center>" . $data["Saddress"] . "</center></td>";
            echo "<td><center>" . $data["city"] . "</center></td>";
            echo "<td><center>" . $data["price"] . "</center></td>";
            echo "<td><center>" . $data["status"] . "</center></td>";
            echo "<td><center><a href='editLand.php?ids=".$data["landID"]."'><button class='reject-btn' >Update</button></a>&nbsp;&nbsp;<a href='includes/deleteLand.inc.php?id=".$data["landID"]."'><button class='approve-btn' onclick='confirmDelete()'>Delete</button></a></center></td>";
            echo "</tr>";
            }
           }
           $data = $result->fetch_assoc();

          
           
           ?>
      
    </tbody>
  </table>
  </form>
  <script>
  function confirmDelete() {
    if (confirm("Do you want to delete?")) {

      document.forms[0].submit();
    } else {
      document.forms[1].submit();
    }
  }
</script>
