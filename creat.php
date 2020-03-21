<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="creat.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<title></title>
</head>
<body>
	<div id="card">
	<div class="row justify-content-center mt-5 ">
		<h2 class="pb-4 text-info">ADD NEW BOOK TO THE LIBRARY</h2>
		<form action="action/a_creat.php" method="post">
			<div class= "form-group">
			<input class="size" type="text" placeholder="book-title" name="title"><br>
			</div>
			<div class= "form-group">
			<input class="size"type="<img src="https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.gruender.de%2Feigenes-buch-schreiben-und-zum-experten-werden%2F&psig=AOvVaw1ngqriNAvsgs0dxDBEbcH0&ust=1584884140586000&source=images&cd=vfe&ved=0CAIQjRxqFwoTCIix5tPXq-gCFQAAAAAdAAAAABAD" alt="" placeholder="book-image" name="image"><br>
			</div>
			<div class= "form-group">
			<input class="size"type="text" placeholder="book-author" name="author"><br>
			</div>
			<div class= "form-group">
			<input class="size"type="text" placeholder="book-publisher" name="publisher"><br>
			</div>
			<div class= "form-group">
			<input class="size" type="text" placeholder="book-type" name="type"><br>
			</div>
			<div class= "form-group">
			<input class="size"type="text" placeholder="book-description" name="short_description"><br>
			</div>
			<div class= "form-group">
			<input class="size"type="date" name="publish_date"><br>
			</div>
			<div class= "form-group">
			<input class="size"type="text" placeholder="book-ISBN-code" name="ISBN_code"><br>
			</div>
			<input id="size" type="submit" class="btn btn-primary" name="submit">
		</form>
	</div>
	</div>
</body>
</html>