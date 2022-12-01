<?php $this->view('header', 'Workshop'); ?>

<h1>Edit product Info</h1>
<form action='' method='post' enctype='multipart/form-data'>
	<div class="form-group">
		<label class="col-sm-2 col-form-label">Picture:<input class='form-control' type="file" name="picture" id="picture" /></label>

	</div>

	<div class="products-inputs">
				

			<label>The Title of the product:<input type="text" name="title" value="<?= $data['product']->title ?>" /></label><br>
			<label>The Description of the product:<input type="text" name="description" value="<?= $data['product']->description ?>" /></label><br>
			<label>The Price of the product:<input type="text" name="price"  value="<?= $data['product']->price ?>"/></label><br>

			<label class="image_product">Product</label><img id='pic_preview' src='/images/<?=$data->picture ?>' style="max-width:100px;max-height:100px" name ="filename" />

	</div>
		<br><br><br>
		<!-- <br><br><br>
		<br><br><br>
		<br><br><br> -->
		<div>
			<?php $this->view('rating'); ?>
		</div>
		
		<!-- <button> 
				<input type="submit" name="action" class='btn btn-primary' value="Add" />	
		</button>  -->
			<br>


		<button id="add_to_product" type="submit" name='action' value='Register' class="btn btn-primary">Add the new product </button>
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