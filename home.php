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

if(isset($_POST['submit']))
{ 
	$form_no=$_POST['form_no'];
	$student_name=$_POST['student_name'];
	$FatherName=$_POST['father_name'];
	$cat=$_POST['category'];
	$address=$_POST['address'];
	$contact_no=$_POST['contact_no'];
	$marks=$_POST['marks'];


//	echo "Name:".$name."<br>";

//read data
	$query = "INSERT INTO `form`(`form_no`,`student_name`, `father_name`,`cat`,`address`,`contact_no`,`marks`) VALUES('$form_no','$student_name','$FatherName','$cat','$address','$contact_no','$marks')";

	if ($conn->query($query) === TRUE) {
		echo "New record created successfully";
	} else {
		echo "Error: " . $query . "<br>" . $conn->error;
	}


}


?>


<!DOCTYPE html>
<html>
<head>
	<title>home page</title>
	<style type="text/css">
		
		.c1{
			background-color: #66a3ff;
			padding: 20px ;
			
		}
		.c1{
	height: 100vh;
	background-image: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)), url(Arthur-Fleck-Joker-2019-joker-2019-42997795-1600-900.jpg);
	background-position: center;
	background-size: cover;	
	overflow-x: hidden;
	position: relative;

	</style>
</head>
<body class="c1">

		<form accept="home.php" method="post">
			<input type="text" name="form_no" placeholder="Form_no"><br><br>
			<input type="text" name="student_name" placeholder="student_name"><br><br>
			<input type="text" name="father_name" placeholder="Father name"><br><br>
			<input list="category" type="text" name="category" placeholder="Category"><br><br>
			<datalist id="category">
					<option>BSCS</option>
					<option>SE</option>
					<option>Electrical Engineering</option>

			</datalist>
			<input type="text" name="address" placeholder="Address"><br><br>
			<input type="text" name="contact_no" placeholder="Contact_no"><br><br>
			<input type="text" name="marks" placeholder="marks"><br><br>

			


			<input type="submit" name="submit" value="submit"  style="width: 90px ; height: 25px" > 


		</form>
</body>
</html>
