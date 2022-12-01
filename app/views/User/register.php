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
			background-color:peachpuff;
			height: 100%;
		}
		
	    /*.backBtn{
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
*/
	   	.logo {
	   		width: 250px;
	   		height: 75px;
	   		border-radius: 30%;
	   		margin: 0 auto;
	   		margin-bottom: 10px;
	   	}

	   	.logo img{
	   		width: 100%;
	   	}

	   	.title{
	   		width: 100%;
	   		background-color: rgb(122, 122, 212);
	   		color: white;
    		justify-content: center;
    		margin-bottom: 1.5rem;
    		margin-top: 35px;
	   	}

	   	h5{
	   		font-weight: 600;
	   		text-align: center;
    		justify-content: center;
	   	}

	   	.register{
	   		margin: 100px auto;
	   		width: 350px;
	   		padding: 30px;
	   		background-color: #ffefe0;
	   	}

	   	form{
	   		width: 100%;
	   		margin-top: 30px;
	   	}

	   	input{
	   		font-size: 18px;
	   		padding: 10px 20px 10px 5px;
	   		border: none;
	   		outline: none;
	   		display: block;
	   		background: none;
	   	}

	   	#btnRegister{
	   		width: 100%;
	   		padding: 12px 10px;
	   		border: none;
	   		font-size: 18px;
	   		border-radius: 20px;
	   	}

	   	footer{
    		background-color: #333333;
    		width: 100%;

		}

		footer h4{
    		color: white;
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

	<div class="register">
		<div class="logo">
			<img src="/Images/Work.png">
		</div>
		<div class="title"><h5>Sign Up with the correct inputs</h5></div>
			<form action="" method="post">
				<input type="text" class="form-control" name="username" id="username" placeholder="Enter Username"><br>
				<input type="password" class="form-control" name="password" id="password" placeholder="Enter Password"><br>
				<input type="password" class="form-control" name="password_confirmation" id="password_confirmation" placeholder="Re-enter Password"><br>
				<input type="submit" name="action" id="btnRegister" value="Register" class="btn btn-primary">
			</form>
	</div>

	<!-- <a href="/User/index" class= "backBtn">BACK</a> -->

	<footer class="mt-2 py-1">
	  <div class="row container mx-auto pt-1">
	    <div class="footer-one col-lg-3 col-md-6 col-12">
	      <img src="/Images/Work.png" style="max-width: 250px;" style="max-height: 250px;">
	    </div>
	    <div class="footer-one col-lg-3 col-md-6 col-12">
	      <h4 class="pb-2">Creators</h4>
	      <ul class="text-uppercase list-unstyled">
	        <li><a href="https://github.com/Shooter-06" target="-blank">Fiacre</a></li>
	        <li><a href="https://github.com/Vincent-C3" target="-blank">Nam</a></li>
	        <li><a href="https://github.com/BakaDobe" target="-blank">De Andre</a></li>
	      </ul>
	    </div> 
	  </div>
  	</footer>
</body>
</html>