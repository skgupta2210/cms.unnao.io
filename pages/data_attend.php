<?php
if(isset($_POST['submit']))
{
	include 'db_con.php';
    $rollno=$_POST['roll_no'];
	
	 $sel="select fname from registration where `roll_no`='$rollno'";
	mysqli_query($con,$sel);  
		
?>
<script>
	
	window.location='add_attend.php';
	</script>
<?php }

else
{
	header('Location:attend.php');
}
?>
