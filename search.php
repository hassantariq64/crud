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
	<title>Search Data</title>
</head>
<body>
	<form method="post">
		<input type="text" name="form_no" placeholder="search">
		

		<?php
		 if(isset($_POST['submit']))
	{
				$fn=$_POST['form_no'];

				$s="SELECT * FROM form WHERE form_no = '$fn'";
                     $Q=while ($row=mysqli_connect($conn,$s)){ ?>

                      <?php echo $row['form_no'];?>

                    <?php } }  ?>
				
	
		<br><br><input type="submit" name="submit" value="search record"  style="width: 90px ; height: 25px" > 
	</form>




</body>
</html>