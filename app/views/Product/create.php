<?php $this->view('header', 'Workshop'); ?>

<!-- <style type="text/css">
	.button {
	  background-color: #4CAF50; /* Green */
	  border: none;
	  color: white;
	  padding: 20px;
	  text-align: center;
	  text-decoration: none;
	  display: inline-block;
	  font-size: 16px;
	  margin: 4px 2px;
	  cursor: pointer;
	}

</style> -->

<h1>New product Info</h1>
<form action='' method='post' enctype='multipart/form-data'>
	<div class="form-group">
		<label class="col-sm-2 col-form-label">Picture:<input class='form-control' type="file" name="picture" id="picture" /></label>

	</div>

	<div class="products-inputs">
				

			<label>The Title of the product:<input type="text" name="title" /></label><br>
			<label>The Description of the product:<input type="text" name="description" /></label><br>
			<label>The Price of the product:<input type="text" name="price" /></label><br>

			<label class="image_product">Product</label><img id='pic_preview' src='/images/<?=$data->picture ?>' style="max-width:100px;max-height:100px" name ="filename" />


	</div>
		<br><br><br>
		
		
		<div>
			<?php $this->view('rating'); ?>
		</div>
		
		<!-- <button> 
				<input type="submit" name="action" class='btn btn-primary' value="Add" />	
		</button>  -->
			<br>


		<button id="add_to_product" type="submit" name='action' value='Register' class="btn btn-primary">Add the new product </button>
</form>




			<form action='/Review/add/<?=$data->review_id?>' method="post">
				<div class="input-group">
					<input class='form-control' type="text" name="comment" placeholder="Write a review " />
				<button type="submit" name='action' class='btn btn-primary'><i class='bi-send'></i></button>
				</div>
		</form>






<a href='/Product/index'>Cancel</a>
<a href='/Profile/index'>Back to your Profile</a>

<script>
	picture.onchange = evt => {
  const [file] = picture.files
  if (file) {
    pic_preview.src = URL.createObjectURL(file)
  }
}
</script>