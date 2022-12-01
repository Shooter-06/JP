<html>
<head>
	<title>Profile Edit</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</head>

<body>

<h1>Your Product Information</h1>
<form action='' method='post' enctype="multipart/form-data">

	<div class="products-inputs">

		<label>The Title of the product: <?=$data['product']->title ?></label><br>
		<label>The Title of the product: <?=$data['product']->description ?></label><br>
		<label>The Title of the product: <?=$data['product']->price ?></label><br>
		<label>The Title of the product: <?=$data['product']->filename ?></label><br>

		<input type="submit" name="action" value="Delete" />

	</div>	

</form>


<a href="/Post/index/">Cancel</a>

</body>
</html>