<?php $this->view('header', 'Workshop');?>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>

	<style>

		body{
			background-color:#ffcccb;
		}
		h1{
			font-size: 30px;
    		font-family: "Times New Roman", Times, serif;
			
		}
		p{
			font-size: 20px;
    		font-family: "Times New Roman", Times, serif;	
		}
	</style>


</head>
<body>

	<h1><center><big>Welcome to our inventory of your profile</big></center></h1>

	<p> As a new seller, you have no items to sell.</p>
	<br>
	<p>Make sure you add on your items!!.</p>
	<p>Your inventory is empty</p>
		

	<?php foreach($data['products'] as $product){
		echo "
			<div class='shop_contents mx-auto container-fluid'>
			<div class='product_box text-center'>
				<div class='card'>

					<img class='img-fluid' src='/images/$product->picture' style='max-width:100px;max-height:100px' id='picture'>
					<div class='card-contents'>

						<td type=product_id> $product->product_id</td> <br>
						<td type=title> $product->title</td><br>
						<td type=description> $product->description</td> <br>
						<td type=price> $product->price</td> <br>


						<a class='btn btn-primary' href='/cart/addToCart/$product->product_id'> Add to cart </button> 
						<a class='btn btn-secondary' href='/Product/edit/$product->product_id'>Edit</a> 

						<a class='btn btn-secondary btnpurchase' href='/Product/delete/$product->product_id'>Delete</a> 

					</div>	
				</div>
				
			</div> 
		</div>";
		}?>


	<br>
	<a href=<?php echo '"/Product/create/'.$_SESSION['profile_id'].'"';?> class= "backBtn">Add a new Product to your inventory</a>
	<br>
	<a href="/Profile/index" class= "backBtn">Return to the your profile</a>
	<br>
	<a href="/Main/index" class= "backBtn">Logout from your profile</a>

		

</body>

<script>
	file = "" + "<?= $data['product']->picture ?>"
	if (file != "") {
		document.getElementById("picture").src = "/images/" + file;
	}
</script>



<footer>
	<?php $this->view('footer'); ?>
</footer>

</html>