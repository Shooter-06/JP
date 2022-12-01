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

<style type="text/css"></style>
	<link rel="stylesheet" type="text/css" href="/CSS/style.css">



</head>


<body>

	<div class="info">
		<h5>Our stock Inventory</h5>
	</div>

	<section class="shop_container">
		<div class="shop_contents mx-auto container-fluid">
			<div class="product_box text-center">
				<div class="card">
					<img class="img-fluid" src="/Images/yellownike.jpg" style='max-width:100px;max-height:100px'>
					<div class="card-contents">
						<h2 class="product_title">Nike</h2>
						<span class="price">$164.99</span><br>
						<button class="btnpurchase" href='/Cart/productsCart/<?=$product_id->product_id?>'>Buy Now</button>
						<i class="fa-sharp fa-solid fa-cart-shopping"></i>
						<!--<i class="fa-solid fa-trash"></i>-->
						<i class="fa-solid fa-pen-to-square" href='/Product/edit/$item->product_id'></i>
						<i class="glyphicon glyphicon-trash" type=action href='/Product/delete/$item->product_id'></i>
						
					</div>	
				</div>
				
			</div>
			
			<div class="product_box text-center">
				<div class="card">
					<img class="img-fluid" src="/Images/airmax.jpg"  style='max-width:100px;max-height:100px'>
					<div class="card-contents">
						<h2 class="product_title">Nike Air Max</h2>
						<span class="price">$164.99</span><br>
						<button class="btnpurchase" href='/Cart/productsCart/$item->product_id'>Buy Now</button>
						<i class="fa-sharp fa-solid fa-cart-shopping"></i>
						<i class="glyphicon glyphicon-trash" type=action href='/Product/delete/$item->product_id'></i>
						<i class="fa-solid fa-pen-to-square" href='/Product/edit/$item->product_id'></i>
					</div>	
				</div>
			</div> 
			
	</section>

	<nav aria-label="...">
	  <ul class="pagination">
	    <li class="page-item disabled">
	      <a class="page-link">Previous</a>
	    </li>
	    <li class="page-item active"><a class="page-link" href="#">1</a></li>
	    <li class="page-item" aria-current="page">
	    <li class="page-item disabled">
	      <a class="page-link" href="#">Next</a>
	    </li>
	  </ul>
	</nav>


	
	<p>Say something about the products</p>
	<form action='/Review/add/<?=$data->review_id?>' method="post">
	<div class="review">
		<input class='form-control' type="text" name="review" placeholder="Say something" />
	<button type="submit" name='action' class='btn btn-primary'><i class='bi-send'></i></button>
	</div></form>

	</div>


	<a href="/Product/create" class= "backBtn">Add a new Product</a>
	<br>
	<a href="/Profile/index" class= "backBtn">Return to the your profile</a>
	<br>
	<a href="/User/index" class= "backBtn">Logout</a>
	<a href="/Profile/create" class= "backBtn">Create a profile</a>
	<br><br><br><br><br><br><br>

</body>

<!-- <footer>
	<p>this project was developed by:</p>
	<?php $this->view('footer'); ?> -->

<!-- <footer class="mt-2 py-1">
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

</footer> -->
</html>