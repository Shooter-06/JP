<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" type="text/css" href="/CSS/style.css">
</head>
<body>

	<h1><center><big>Welcome to our inventory of your profile</big></center></h1>

	<br>
	<p>Add your items.</p>

	<img src="/images/empty.PNG" style="max-height: 250px;" style="max-width: 250px;">

	<?php
	$this->view('Product/indexPProducts', $data['products']);
	?>

	<br>


	<br><br>
	<a href=<?php echo '"/Product/create/'.$_SESSION['profile_id'].'"';?> class= "backBtn">Add a new Product to your inventory</a>
	
	<br>
	<a href="Product/index" class= "backBtn">Logout from your profile</a>

		

</body>
<footer>
	<?php $this->view('footer'); ?>
</footer>

</html>