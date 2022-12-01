<html>
<head>
	<title>User account</title>
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
<!--<a href="/User/twofasetup"> set up 2-factor authentication </a>-->

<h1>Modify your password</h1>
<form action='' method='post'>
	<label>Old password:<input type="password" name="old_password" /></label><br>
	<label>New password:<input type="password" name="password" /></label><br>
	<label>New password confirmation:<input type="password" name="password_confirm" /></label><br>
	<input type="submit" name="action" value="Change password" />
</form>

<a href="/User/logout">logout</a>

</body>
</html>