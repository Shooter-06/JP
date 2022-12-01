<html>
<head>
	<title><?= $data ?></title>
	<link rel="stylesheet" href="/CSS/rating.css">
	<link rel="stylesheet" type="text/css" href="/CSS/header.css">
	<link rel="shortcut icon" type="image/png" href="Images/favicon-32x32.png">
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
	
	<link rel="stylesheet" href="app\CSS\site.css">
	<!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.0/css/fontawesome.min.css" integrity="sha384-z4tVnCr80ZcL0iufVdGQSUzNvJsKjEtqYZjiQrrYKlpGow+btDHDfQWkFjoaz/Zr" crossorigin="anonymous"> -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>



<body>
	<style>
		.navbar{
			font-size: 16px;
		}

		.navbar-dark .navbar-nav .nav-link {
			padding: 0 20px;
			color: white;
			transition: 0.3s ease;
		}

		.navbar-dark .navbar-nav .nav-link:hover,
		.navbar i:hover,
		.navbar-dark .navbar-nav .nav-link.active,
		.navbar i.active{
			color: yellow;
		}

		.navbar i{
			font-size: 1.2rem;
			padding: 0 7px;
			cursor: pointer;
/*			font-weight: 500;*/
			transition: 0.3s ease;
		}


		body{
			background-color: peachpuff;
			font-family: Courier New, monospace;
		}

	</style>	
 
	<!-- Navigation -->
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark py-3">
	  <a href="/Main/index"><img src="/Images/Work.png" alt="" style="max-width: 150px;" style="max-height: 150px;"></a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>

	  <div class="collapse navbar-collapse" id="navbarSupportedContent">
	    <ul class="navbar-nav ml-auto">
	      <li class="nav-item">
	        <a class="nav-link" href="/User/index">LOG IN</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="/Product/create">POST PRODUCT</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="/Profile/index">MY PROFILE</a>
	      </li>
	      <li class="nav-item">
	        <!-- <i class="fa-solid fa-magnifying-glass"></i> -->

	        <form action="/Main/search" method="get" style='display:inline-block'>					
				<div class="input-group">
				    <input type="search" name='searching' class="form-control" placeholder="Enter search term" />
				  <button type="submit" class="btn btn-primary" value="Search"><i class="bi-search"></i></button>
				</div>
			
			</form>
	        
	        <i class="fa-sharp fa-solid fa-cart-shopping" href="/cart/inndex/$product->product_id"></i>

	      </li>
	    </ul>
	  </div>
	</nav>
</body>