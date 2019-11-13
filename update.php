<?php
 //include('db.php');
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "admission";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
} 
else
	echo "Connected successfully";



?>



<!DOCTYPE html>
<html>
<head>
	<title>update Data</title>
</head>
<body>
	<form method="post">
		<input type="text" name="form_no" placeholder="student name">
		

		<?php


		if(isset($_POST['submit']))
		{
			$fn=$_POST['form_no'];

			$s="UPDATE form SET student_name='talha' WHERE form_no ='$fn'";
			

			if ($conn->query($s) === TRUE) {
				echo "Record updated successfully";
			} else {
				echo "Error no update record: " . $conn->error;
			}



		}
		?>	

	
				<br><br><input type="submit" name="submit" value="update record"  style="width: 90px ; height: 25px" > 
	</form>




</body>
</html>