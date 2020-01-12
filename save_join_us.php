<?php
include 'pages/db_con.php'; 
extract($_POST);
if(isset($_POST['join']))
{
	$ins="insert into join_us(`name`,`email`,`phone`,`state`,`city`,`course`)values('$name','$email','$phone','$state','$city','$course')";
	mysqli_query($con,$ins);
?>
	<script>
	alert("Thank you to join this college!");
	window.location='index.php';
	</script>
<?php
	}
	else
	{
		header('Location:index.php');
	}
?>