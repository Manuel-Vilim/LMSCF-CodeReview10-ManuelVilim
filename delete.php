<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="creat.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<title></title>
</head>
<body>

</body>
</html>
<?php 
	require_once 'action/db_connect.php';
	if($_GET["id"]){
		$id = $_GET["id"];

		$sql = "DELETE FROM media WHERE id =$id";

		if(mysqli_query($conn,$sql)){
			echo 
			"
			<div id='card'>
			<div class='row justify-content-center mt-5'><h2>You deleted the Book!</h2><br></div>
			<div class='row justify-content-center mt-1'>
			<a href='index.php' class='btn btn-primary'>Back to the Hompage</a>
			</div>
			</div>";
		}else{
			echo "
			<div id='card'>
			<div class='row justify-content-center mt-5'><h2>Error! Please try it again!</h2><br></div>
			<div class='row justify-content-center mt-1'>
			<a href='index.php' class='btn btn-primary'>Back to the Hompage</a>
			</div>
			</div>";
		}
	}

 ?>