<html>
<head>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/
		bootstrap.min.css" integrity="sha384-Vkoo8×4CGsO3+Hhxv8T/
		Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
	integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
	crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="/CSS/style.css">

	<title>Register a new user</title>

	<style>

		body{
			background-color:peachpuff;
		}
		h1{
			font-size: 30px;
    	font-family: "Times New Roman", Times, serif;
			position: absolute;
			text-align: center;
			top: 20%;
    	width: 100%;
		}
		p{
			font-size: 30px;
    	font-family: "Times New Roman", Times, serif;
			position: absolute;
			text-align: center;
			top: 20%;
    	width: 100%;
		}

		.username_form{
    		font-family: "Times New Roman", Times, serif;
			position: absolute;
			text-align: center;
			top: 10%;
    		width: 100%;
    	}
    	.password_form{
    		font-family: "Times New Roman", Times, serif;
			position: absolute;
			text-align: center;
			top: 25%;
    		width: 100%;
    	}

    #username{
    	font-family: "Times New Roman", Times, serif;
		position: center;
		margin-top: 10px;
		margin-left: 36%;
    	width: 250px;
    }

    #password{
    	font-family: "Times New Roman", Times, serif;
		position: center;
		margin-top: 30px;
		margin-left: 36%;
    	width: 250px;
    }

   

    #password{
    	font-family: "Times New Roman", Times, serif;
		position: center;
		margin-top: 30px;
		margin-left: 36%;
    	width: 250px;
    }


    button{
    	font-family: "Times New Roman", Times, serif;
			position: absolute;
			text-align: absolute;
			margin-top: 350px;
			margin-left: 40%;
    	width: 300px;
    }

   	.register_form{
   		font-family: "Times New Roman", Times, serif;
		position: absolute;
		text-align: absolute;
		margin-top: 400px;
		margin-left: 40%;
    	width: 300px;
   	}

   	a:hover{
    	text-decoration: none;
    }
	</style>

</head>

<body>

	<?php
		if(isset($_GET['error'])){ ?>
	<div class="alert alert-danger" role="alert">
	  <?= $_GET['error'] ?>
	</div>
	<?php	}
	?>


	<?php
		if(isset($_GET['message'])){ ?>
	<div class="alert alert-success" role="alert">
	  <?= $_GET['message'] ?>
	</div>
	<?php	}
	?>


	<h><CENTER>Welcome to the Workshop Login Page:</CENTER></h>

	<form action='' method='post'>
		<div class="username_form">
			<label for="username">Username: </label>


    	<input type="text" class="form-control" id="username" name='username' placeholder="Enter the username">
		</div>
		
		<br>

		<div class="password_form">
			<label for="password">Password: </label>
    	<input type="password" class="form-control" id="password" name='password' placeholder="Enter the password">
		</div>
		<br>

		<button type="submit" name='action' value='Register' class="btn btn-primary">Login</button>
		<br>

		<div class="register_form">
			<a href="/User/register">REGISTER HERE !!</a>
		</div>

	</form>	

		
	
</body>

</html>