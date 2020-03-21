<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../creat.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<title></title>
	<title></title>
</head>
<body>

</body>
</html>

<?php 
	require_once 'db_connect.php';

	if($_POST){
		$title= $_POST["title"];
		$image= $_POST["image"];
		$author= $_POST["author"];
		$publisher= $_POST["publisher"];
		$type= $_POST["type"];
		$short_description= $_POST["short_description"];
		$publish_date= $_POST["publish_date"];
		$ISBN_code= $_POST["ISBN_code"];

		$sql = "INSERT INTO `media`(`title`, `image`, `author`, `publisher`, `type`, `short_description`, `publish_date`, `ISBN_code`) VALUES ('$title', '$image', '$author', '$publisher', '$type', '$short_description', '$publish_date','$ISBN_code')";

		if(mysqli_query($conn,$sql)){
			echo "
			<div id='card'>
			<div class='row justify-content-center mt-5'><h2>You added a new book!</h2><br></div>
			<div class='row justify-content-center mt-1'>
			<a href='../index.php' class='btn btn-primary'>Back to Hompage</a>
			</div>
			</div>";
		}else{
			echo "
			<div id='card'>
			<div class='row justify-content-center mt-5'><h2>Error! Please try it again!</h2><br></div>
			<div class='row justify-content-center mt-1'>
			<a href='../index.php' class='btn btn-primary'>Back to Hompage</a>
			</div>
			</div>";
		}
	}
 ?>