<!DOCTYPE html>
<html>
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
					<img class='img-fluid' src='/Images/yellownike.jpg'>
					<div class='card-contents'>

						<td type=product_id> $product->product_id</td> <br>
						<td type=title> $product->title</td><br>
						<td type=description> $product->description</td> <br>
						<td type=price> $product->price</td> <br>

						<img src='/images/$product->picture' style='max-width:50px;max-height:50px' id='picture'>

						<button class='btnpurchase' href='/Cart/productsCart/$product->product_id'>Buy Now</button>
						<i class='fa-sharp fa-solid fa-cart-shopping' href='/Cart/productsCart/$product->product_id'></i>

						<i class='fa-solid fa-pen-to-square' href='/Product/edit/$product->product_id'></i>
						<i class='glyphicon glyphicon-trash' type=action href='/Product/delete/$product->product_id'></i>
						<!-- <td type= action><a href='/Product/delete/$product->product_id'> delete</a></td> -->
					</div>	
				</div>
				
			</div> ";
		}?>
	<?php 

	foreach ($data['products'] as $product) {
		echo"<tr> 
		<td type=product_id> $product->product_id</td> <br>
		<td type=title> $product->title</td><br>
		<td type=description> $product->description</td> <br>
		<td type=price> $product->price</td> <br>

		

		<td type=action>
			<a href='/Product/edit/$product->product_id'>edit</a> 
			<br>
			<a href='/Product/delete/$product->product_id'>delete</a>
			<br><br>
		</td>

		</tr>

		";
	}
	?>

	<br>

	<br><br>
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