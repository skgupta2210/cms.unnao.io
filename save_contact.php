<?php
include 'pages/db_con.php'; 
extract($_POST);
if(isset($_POST['save']))
{
	$ins="insert into contact(`name`,`email`,`subject`,`feedback`)values('$name','$email','$subject','$feedback')";
	mysqli_query($con,$ins);
?>
	<script>
	alert("Thank you to contact us!");
	window.location='index.php';
	</script>
<?php
	}
	else
	{
		header('Location:index.php');
	}
?>