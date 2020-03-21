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
require_once'action/db_connect.php';
	if($_GET["id"]){
		$id= $_GET["id"];

		$sql = "SELECT * FROM media WHERE id =$id";
		$result= mysqli_query($conn,$sql);

		$row= $result->fetch_assoc();
	}
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>
 <body>
 		<div id="card">
		<div class="row justify-content-center mt-5 ">
		<h2 class="pb-4 text-info">MAKE UPDATES TO THE CHOOSEN BOOK</h2>
 		<form action="action/a_update.php" method="POST">
 			<div class= "form-group">
 		<input type="hidden" name="id" value="<?php echo $row['id'] ?>">
 			</div>
 			<div class= "form-group">
 		<input class="size" type="name" name="title" value="<?php echo $row['title'] ?>">
 			</div>
 			<div class= "form-group">
 		<input class="size" type="name" name="image" value="<?php echo $row['image'] ?>">
 			</div>
 			<div class= "form-group">
 		<input class="size"type="name" name="author" value="<?php echo $row['author'] ?>">
 			</div>
 			<div class= "form-group">
 		<input class="size"type="name" name="publisher" value="<?php echo $row['publisher'] ?>">
 			</div>
 			<div class= "form-group">
 		<input class="size"type="name" name="type" value="<?php echo $row['type'] ?>">
 			</div>
 			<div class= "form-group">
 		<input class="size"type="name" name="short_description" value="<?php echo $row['short_description'] ?>">
 			</div>
 			<div class= "form-group">
 		<input class="size"type="name" name="publish_date" value="<?php echo $row['publish_date'] ?>">
 			</div>
 			<div class= "form-group">
 		<input class="size"type="name" name="ISBN_code" value="<?php echo $row['ISBN_code'] ?>">
 			</div>
 		<input id="size" type="submit" class="btn btn-primary" name="submit">
 		
 	</form>
 </div>
</div>
 
 </body>
 </html>