<html>
<head>
	<title>Login</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</head>

<body>

<?php
	if(isset($_GET['error'])){ ?>
<div class="alert alert-danger" role="alert">
  <?= $_GET['error'] ?>
</div>
<?php	}
	if(isset($_GET['message'])){ ?>
<div class="alert alert-success" role="alert">
  <?= $_GET['message'] ?>
</div>
<?php	}
?>

<form action='' method='post'>
	<label>Profile first Name:<input type="text" name="first_name" /></label><br>
	<label>Password:<input type="password" name="password" /></label><br>
	<input type="submit" name="action" value="Log in" />
</form>

<a href="/Profile/details" class= "backBtn">BACK</a>
<br>
<a href="/Profile/create" class= "backBtn">CREATE YOUR PROFILE</a>
<!-- <a href="/profile/register" class= "backBtn">BACK</a>

</body>

</html> -->