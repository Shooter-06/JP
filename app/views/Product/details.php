<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>

	<?php $this->view('header', 'Workshop'); ?><h1><center><big>Welcome to our inventory</big></center></h1>



	<?php
		$this->view('Product/index');
	?>

	<?php $this->view('footer'); ?>


	<br>
	<a href="/Product/create" class= "backBtn">Add a new Product</a>
	<br>
	<a href="/Profile/index" class= "backBtn">Return to the your profile</a>
	<br>
	<a href="/User/index" class= "backBtn">Logout</a>

</body>
</html>





