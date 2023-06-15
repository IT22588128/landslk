<?php


	include("includes/dbh.inc.php");
    
/*	
	if(isset($uid))
	{
	*/
		$query = "SELECT * FROM users  ";
		$result = $conn->query($query);
/*
	}
	else
	{
		$query = "SELECT *FROM users";
	
	}
	
*/	
?>
<link rel="stylesheet" href="style/users.css">



<h2>User</h2>

<div class="container">

<form action="" method="POST">

</form>
<br />

<?php 
 





echo "<table border='1'>
	<tr>
		<th> Name</th>
		<th>Email</th>
		<th>Nic</th>
		<th>UserName</th>
		<th>Update</th>
		<th>Delete</th>
	</tr>";

if ($result->num_rows > 0) 
           {

           while ($data = $result->fetch_assoc()) {
echo "<tr>";
echo "<td>" . $data['usersName'] . "</td>";
echo "<td>" . $data['usersEmail'] . "</td>";
echo "<td>" . $data['NIC'] . "</td>";
echo "<td>" . $data['usersUid'] . "</td>";
echo "<td><a href='profilesettingAdmin.php?id=".$data['usersId']."'><img src='src/icons8-Edit-32.png' alt='Edit'></a></td>";
echo "<td><a href='delete.php?id=".$data['usersId']."'><img src='src/icons8-Trash-32.png' alt='Delete'></a></td>";
echo "</tr>";
}
echo "</table>";
}
?>

</body>
</html> 
