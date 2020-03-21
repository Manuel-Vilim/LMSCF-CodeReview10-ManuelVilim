<!DOCTYPE html>
<html>
<head>
		<link rel="stylesheet" type="text/css" href="creat.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<title>CR 10 Manuel</title>
</head>
<body>
	<div class="bb">
		
	
	<div class="d-flex justify-content-center mt-4 mb-4">
	<a href='creat.php'><button type='button' id="headline" class='btn btn-outline-info'><h1>ADD A NEW BOOK</h1></button></a><br></div>
	<?php 
		include ("action/db_connect.php");

		$sql = "SELECT * FROM media";
		$result = mysqli_query($conn, $sql);
		$conn->close();
		if($result->num_rows == 0){
			echo "no result found";
		}elseif($result->num_rows ==1){
			$row = $result->fetch_assoc();?>
			<table class="table">
				<thead>
					<tr>
						<th>Title</th>
						<th>image</th>
						<th>author</th>
						<th>publisher</th>
						<th>type</th>
						<th colspan="3">short_description</th>
						<th>publish_date</th>
						<th>ISBN_code</th>
						<th>changes</th>
					</tr>
				</thead>
				<tbody>
					<tr>
					</tr>
				</tbody>
			
			<tr>
			<td><?php echo $row["title"]; ?></td>
			<td><?php echo "<img src=book.png>"; ?></td>
			<td><?php echo $row["author"]; ?></td>
			<td><?php echo $row["publisher"]; ?></td>
			<td><?php echo $row["type"]; ?></td>
			<td colspan="3"><?php echo $row["short_description"]; ?></td>
			<td><?php echo $row["publish_date"]; ?></td>
			<td><?php echo $row["ISBN_code"]; ?></td>
			
			<td>
			<?php

			echo"<a href='update.php?id=".$row["id"]."'class='btn btn-outline-success'>Update</a><a href='delete.php?id=".$row["id"]."'class='btn btn-outline-danger'>Delete</a><br>";?>
			</tr>
			</table>
			<?php 
		}else{
			$rows = $result->fetch_all(MYSQLI_ASSOC);
			foreach ($rows as $key => $value){?>
			<table class="table">
				<thead>
					<tr>
						<th>Title</th>
						<th>image</th>
						<th>author</th>
						<th>publisher</th>
						<th>type</th>
						<th colspan="3">short_description</th>
						<th>publish_date</th>
						<th>ISBN_code</th>
						<th>changes</th>
					</tr>
				</thead>
				
			
			<tr>
			<td><?php echo $value["title"]; ?></td>
			<td><?php echo "<img src=book.png>"; ?></td>
			<td><?php echo $value["author"]; ?></td>
			<td><?php echo $value["publisher"]; ?></td>
			<td><?php echo $value["type"]; ?></td>
			<td colspan="3"><?php echo $value["short_description"]; ?></td>
			<td><?php echo $value["publish_date"]; ?></td>
			<td><?php echo $value["ISBN_code"]; ?></td>
			<td>
			<?php

			echo"<a href='update.php?id=".$value["id"]."'class='btn btn-outline-success'>Update</a><a href='delete.php?id=".$value["id"]."'class='btn btn-outline-danger'>Delete</a><br>";?>
				
			</td>
			</tr>
			</table>
			<?php
		}
		}
	 ?>
	 </div>
</body>
</html>