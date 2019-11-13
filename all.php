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
	<title>All Data</title>
	<style type="text/css">
		.c1{
			background-color: #ffe6e6;
			padding: 20px ;
			
		}


	</style>
</head>
<body class="c1">
		<table  >
			<thead>
				<tr>
					<th>Form_no  </th>
					<th>Student_name </th>
					<th>Father_name</th>
					<th>Category</th>
					<th>Address</th>
					<th>Contact_no</th>
					<th>Marks</th>
					
				</tr>
			</thead>
			<tbody>
				
				<?php
				
				$s="SELECT * from form";
				$q=mysqli_query($conn,$s); 
				while($row=mysqli_fetch_array($q)){ ?>

					<tr>
						<td><?php echo $row['form_no'];?></td>
						<td><?php echo $row['student_name'];?></td>
						<td><?php echo $row['father_name'];?></td>
						<td><?php echo $row['cat'];?></td>
						<td><?php echo $row['address'];?></td>
						<td><?php echo $row['contact_no'];?></td>
						<td><?php echo $row['marks'];?></td>

					</tr>
				<?php }  ?>
			</tbody>

					<tbody>
				
				<?php
				
				$s="UPDATE form ";
				$q=mysqli_query($conn,$s); 
				while($row=mysqli_fetch_array($q)){ ?>

					<tr>
						<td><?php echo $row['form_no'];?></td>
						<td><?php echo $row['student_name'];?></td>
						<td><?php echo $row['father_name'];?></td>
						<td><?php echo $row['cat'];?></td>
						<td><?php echo $row['address'];?></td>
						<td><?php echo $row['contact_no'];?></td>
						<td><?php echo $row['marks'];?></td>

					</tr>
				<?php }  ?>
			</tbody>



		</table>


</body>
</html>