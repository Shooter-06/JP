<html>
<head>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/
		bootstrap.min.css" integrity="sha384-Vkoo8×4CGsO3+Hhxv8T/
		Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
	integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
	crossorigin="anonymous"></script>

	<title>Register a new user</title>

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
				margin-top: 10px;
				margin-left: 36%;
	    	width: 400px;
	    }

	    .lastname__form{
	    	font-family: "Times New Roman", Times, serif;
				position: absolute;
				text-align: center;
				top: 45%;
	    	width: 100%;
	    }

	    #last_name{
	    	font-family: "Times New Roman", Times, serif;
				position: absolute;
				margin-top: 10px;
				margin-left: 36%;
	    	width: 400px;
	    }

	    .address_form{
	    	font-family: "Times New Roman", Times, serif;
				position: absolute;
				text-align: center;
				top: 60%;
	    	width: 100%;
	    }

	    #address{
	    	font-family: "Times New Roman", Times, serif;
			  position: absolute;
			  margin-top: 10px;
			  margin-left: 36%;
	    	width: 400px;
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
			  margin-top: 10px;
			  margin-left: 36%;
	    	width: 400px;
	  	}
	  	.pCode_form{
	    	font-family: "Times New Roman", Times, serif;
				position: absolute;
				text-align: center;
				top: 60%;
	    	width: 100%;
	    }

	    #postal_code{
	    	font-family: "Times New Roman", Times, serif;
			  position: absolute;
			  margin-top: 10px;
			  margin-left: 36%;
	    	width: 400px;
	  	}

	  	.password_form{
	    	font-family: "Times New Roman", Times, serif;
				position: absolute;
				text-align: center;
				top: 45%;
	    	width: 100%;
	    }

	    #password{
	    	font-family: "Times New Roman", Times, serif;
				position: absolute;
				margin-top: 10px;
				margin-left: 36%;
	    	width: 400px;
	    }

	    .passwordConf_form{
	    	font-family: "Times New Roman", Times, serif;
				position: absolute;
				text-align: center;
				top: 60%;
	    	width: 100%;
	    }

	    #passwordConf{
	    	font-family: "Times New Roman", Times, serif;
			  position: absolute;
			  margin-top: 10px;
			  margin-left: 36%;
	    	width: 400px;
	  	}

	    button{
	    	font-family: "Times New Roman", Times, serif;
				position: absolute;
				text-align: center;
				margin-top: 500px;
				margin-left: 40%;
	    	width: 300px;
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
			<label for="Fname">First Name </label>
    	<input type="text" class="form-control" id="first_name" name='first_name' placeholder="Enter the first name"  value="<?= $data['profile']->first_name ?>">
		</div>

		<div class="lastname_form">
			<label for="Lname">Last Name: </label>
    	<input type="text" class="form-control" id="last_name" name='last_name' placeholder="Enter the last name" value="<?= $data['profile']->last_name?>">
		</div>

		<div class="address_form">
			<label for="address">Address : </label>
    	<input type="text" class="form-control" id="address" name='address' placeholder="Enter the address" value="<?= $data['profile']->address?>">
		</div>

		<div class="city_form">
			<label for="city">City: </label>
    	<input type="text" class="form-control" id="city" name='city' placeholder="Enter your username" value="<?= $data['profile']->city?>">
		</div>

		<div class="pCode_form">
			<label for="postal_code">Postal_code: </label>
    	<input type="text" class="form-control" id="postal_code" name='postal_code' placeholder="Enter your postal code" value="<?= $data['profile']->postal_code?>">

    	
		</div>


		<div class="password_form">
			<label for="password">Password: </label>
    	<input type="text" class="form-control" id="password" name='password' placeholder="Enter the password" value="<?= $data['profile']->password?>">
		</div>

		<div class="passwordConf_form">
			<label for="passwordConf">Password Confirmation: </label>
    	<input type="password" class="form-control" id="passwordConf" name='password_confirmation' placeholder="Enter the password confirmation" value="<?= $data['profile']->passwordConf ?>">
		</div><br>


		<br>

		<button type="submit" name='action' value='Modify' class="btn btn-primary">Save
		</button>
		<br>
		<a href="Profile/index" class= "backBtn">BACK</a>
		<br>
	</form>

	<footer>
		<?php $this->view('footer'); ?>
	</footer>
		
</body>
</html>