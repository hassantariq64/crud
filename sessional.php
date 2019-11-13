<!DOCTYPE html>
<html>
<head>
	<title>Admission</title>

	<style type="text/css">
		body{margin:0;}

	.container{
    display: grid;
    grid-template-columns: auto auto;
    max-width: 700px;
    grid-gap: 10px;
    margin: 150px column;
     height: auto;
    

}


	
	ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
    position: fixed;
    top: 0;
    width: 100%;
}

li {
    float: right;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover:not(.active) {
    background-color: #111;
}

.active {
    background-color: #4CAF50;
}

</style>

</head>
<body>
	<div class="container">
	<ul class="cl1">
	  <li><a class="active" href="home.php">Home</a></li>
	  <li><a href="delete.php">Delete Record</a></li>
	  <li><a href="all.php">All record</a></li>
	   <li><a href="update.php">Update</a></li>
	   <li><a href="search.php">Search</a></li>
	
	</ul>
	</div>


</body>
</html>