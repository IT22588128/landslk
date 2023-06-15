<?php
include("includes/dbh.inc.php");
include_once 'header.php';
$uid = $_GET['id'];


$query = "DELETE FROM users WHERE usersId='$uid'";
$data=mysqli_query($conn,$query);
if($data){

	?>
	
   <script type="text/javascript">
	alert("Date Deleted Successfully");
	
	</script>

	<?php
	header("Location: editUsers.php?error=none");
}
else{
	?>
	<script type = "text/javascript">
		alert("Please try again");
		</script>
		<?php
}