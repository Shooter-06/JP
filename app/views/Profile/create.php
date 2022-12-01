<html>
<head>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/
		bootstrap.min.css" integrity="sha384-Vkoo8×4CGsO3+Hhxv8T/
		Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
	integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
	crossorigin="anonymous"></script>

	<title>Register a new Profile</title>

	<style>

		body{
			background-color:#ffcccb;
		}
		h1{
			font-size: 30px;
    		font-family: "Times New Roman", Times, serif;
			position: absolute;
			text-align: center;
			top: 20%;
    		width: 100%;
		}

		.firstname_form{
    		font-family: "Times New Roman", Times, serif;
			position: absolute;
			text-align: center;
			top: 30%;
    		width: 100%;
    	}

	    #first_name{
	    	font-family: "Times New Roman", Times, serif;
			position: absolute;
			margin-top: 30px;
			
	    	width: 200px;
	    }

	    .lastname_form{
	    	font-family: "Times New Roman", Times, serif;
				position: absolute;
				text-align: center;
				top: 40%;
	    	width: 100%;
	    }

	    #last_name{
	    	font-family: "Times New Roman", Times, serif;
			position: absolute;
			margin-top: 40px;
	    	width: 200px;
	    }

	    .address_form{
	    	font-family: "Times New Roman", Times, serif;
			position: absolute;
			text-align: center;
			top: 50%;
	    	width: 100%;
	    }

	    #address{
	    	font-family: "Times New Roman", Times, serif;
			position: absolute;
			margin-top: 50px;
	    	width: 200px;
	  	}

	  	.city_form{
	    	font-family: "Times New Roman", Times, serif;
			position: absolute;
			text-align: center;
			top: 60%;
	    	width: 100%;
	    }

	    #city{
	    	font-family: "Times New Roman", Times, serif;
			position: absolute;
			margin-top: 60px;
	    	width: 200px;
	  	}

	  	.pCode_form{
	    	font-family: "Times New Roman", Times, serif;
			position: absolute;
			text-align: center;
			top: 70%;
	    	width: 100%;
	    }

	    #postal_code{
	    	font-family: "Times New Roman", Times, serif;
			  position: absolute;
			  margin-top: 70px;
	    	width: 200px;
	  	}

	  	.password_form{
	    	font-family: "Times New Roman", Times, serif;
				position: absolute;
				text-align: center;
				top: 80%;
	    	width: 100%;
	    }

	    #password{
	    	font-family: "Times New Roman", Times, serif;
				position: absolute;
				margin-top: 80px;
	    	width: 200px;
	    }

	    .passwordConf_form{
	    	font-family: "Times New Roman", Times, serif;
				position: absolute;
				text-align: center;
				top: 90%;
	    	width: 100%;
	    }

	    #passwordConf{
	    	font-family: "Times New Roman", Times, serif;
			  position: absolute;
			  margin-top: 90px;
	    	width: 200px;
	  	}

	    button{
	    	font-family: "Times New Roman", Times, serif;
				position: absolute;
				text-align: center;
				margin-top: 120px;
				color: blue;
	    }
	    .button:hover{
	   		background:linear-gradient(to bottom, #f24437 5%, #c62d1f 100%);
				background-color:#f24437;
	   	}
	   	.button:active{
	   		position:relative;
				top:1px;	
	   	}


	    .backBtn{
	    	box-shadow: 3px 4px 0px 0px #8a2a21;
	    	background:linear-gradient(to bottom, #c62d1f 5%, #f24437 100%);
				background-color:#c62d1f;
				border-radius:18px;
				border:1px solid #d02718;
				display:inline-block;
				cursor:pointer;
				color:#ffffff;
				font-family:Arial;
				font-size:17px;
				padding:7px 25px;
				text-decoration:none;
				text-shadow:0px 1px 0px #810e05;
	   	}
	   	.backBtn:hover{
	   		background:linear-gradient(to bottom, #f24437 5%, #c62d1f 100%);
				background-color:#f24437;
	   	}
	   	.backBtn:active{
	   		position:relative;
				top:1px;	
	   	}


	   	
	   	.LoginBtn{
	    	box-shadow: 3px 4px 0px 0px #8a2a21;
	    	background:linear-gradient(to bottom, #00FF00 5%, #f24437 100%);
				background-color:#00FF00;
				border-radius:18px;
				border:1px solid #d02718;
				display:inline-block;
				cursor:pointer;
				color:#ffffff;
				font-family:Arial;
				font-size:17px;
				padding:7px 25px;
				text-decoration:none;
				text-shadow:0px 1px 0px #810e05;
	   	}
	   	.LoginBtn:hover{
	   		background:linear-gradient(to bottom, #f24437 5%, #c62d1f 100%);
				background-color:#f24437;
	   	}
	   	.LoginBtn:active{
	   		position:relative;
				top:1px;	
	   	}


	   	.SignBtn{
	    	box-shadow: 3px 4px 0px 0px #0000FFF;
	    	background:linear-gradient(to bottom, #0000FF 5%, #f24437 100%);
				background-color:#0000FF;
				border-radius:18px;
				border:1px solid #0000FF;
				display:inline-block;
				cursor:pointer;
				color:#0000FF;
				font-family:Arial;
				font-size:17px;
				padding:7px 25px;
				text-decoration:none;
				text-shadow:0px 1px 0px #0000FF;
	   	}
	   	.SignBtn:hover{
	   		background:linear-gradient(to bottom, #0000FF 5%, #0000FF 100%);
				background-color:#0000FF;
	   	}
	   	.SignBtn:active{
	   		position:relative;
				top:1px;	
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


	<h1>Sign Up with the correct inputs :</h1>

	<form action='' method='post'>

		<div class="firstname_form">
			<label for="Fname">First Name: </label>
    	<input type="text" id="first_name" name='first_name' placeholder="Enter the first name">
		</div>

		<div class="lastname_form">
			<label for="Lname">Last Name: </label>
    	<input type="text" id="last_name" name='last_name' placeholder="Enter the last name">
		</div>

		<div class="address_form">
			<label for="address">Address : </label>
    	<input type="text" id="address" name='address' placeholder="Enter the address">
		</div>

		<div class="city_form">
			<label for="city">City: </label>
    	<input type="text" id="city" name='city' placeholder="Enter your city">
		</div>

		<div class="pCode_form">
			<label for="postal_code">Postal_code: </label>
    	<input type="text" id="postal_code" name='postal_code' placeholder="Enter your postal code">

    	<? if(isset($user_id))?>
		</div>


		<div class="password_form">
			<label for="password">Password: </label>
    	<input type="password" id="password" name='password' placeholder="Enter the password">
		</div>

		<div class="passwordConf_form">
			<label for="passwordConf">Password Confirmation: </label>
    	<input type="password" id="passwordConf" name='password_confirmation' placeholder="Enter the password confirmation">
		</div><br>


		<br>

		<button type="submit" name='action' value='Register' class="SignBtn">Sign up
		</button>
		<br>
	</form>

	<a href="/Product/index" class= "backBtn">BACK</a>
	<a href="/Profile/details" class= "LoginBtn">Login</a>

	<!-- <footer>
		<?php $this->view('footer'); ?>
	</footer> -->
		
</body>
</html>