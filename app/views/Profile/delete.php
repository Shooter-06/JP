<html>
<head>
	<title>Profile Edit</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">	
</script>

<style >
	
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

</style>
</head>

<body>

<h1>Your Product Information</h1>
<form action='' method='post' enctype="multipart/form-data">

	<label>The Title of the product: <?=$data['Profile']->first_name ?></label><br>
	<label>The Title of the product: <?=$data['Profile']->last_name ?></label><br>
	<label>The Title of the product: <?=$data['Profile']->address ?></label><br>

	<label>The Title of the product: <?=$data['Profile']->city ?></label><br>
	<label>The Title of the product: <?=$data['ProductProfile']->postal_code ?></label><br>
	<label>Password:<input type="password" name="password" /></label><br>

	<input type="submit" name="action" value="Delete" />

</form>


<a href="/Post/index/">Cancel</a>

</body>
</html>