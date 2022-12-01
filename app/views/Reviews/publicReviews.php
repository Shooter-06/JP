<div class='jumbotron' id='review<?=$data->review_id?>'>
	
<h1>Edit Review</h1>
<?php $product= $data->getReviews();?>

<p>Say something <a href="/Product/details/<?=$product->product_id?>">#review<?=$data->review_id?><img style="max-width:200px;max-height:200px"src="/images/<?= $review->picture ?>" /></a>

<?php  
		if(isset($_SESSION['product_id'])&& _SESSION['product_id'] == $data->profile_id){
			echo "<a href='/Review/edit/$data->review_id'><i class='glyphicon glyphicon-pencil'></i></a>";
			?>

			<a href='/Review/delete/$data->review_id'><i class='fa fa-trash'></i></a></p>

<form action='' method='post' enctype='multipart/form-data'>
	<div class="form-group">
		<label class="col-sm-2 col-form-label">Picture:</label><img id='pic_preview' src='/images/<?=$data->picture ?>' style="max-width:200px;max-height:200px" />
	</div>
	<div class="form-group">
		<label class="col-sm-2 col-form-label">Review:<textarea placeholder='Say something about your product.' name="caption"><?= htmlspecialchars($data->caption) ?></textarea></label>
	</div>
	<input type="submit" name="action" value="Publish" class='btn btn-success' />
</form>
<?php}else{
?> <p><?=htmlspecialchars($data->review) ?></p>
}

<script>
	picture.onchange = evt => {
  const [file] = picture.files
  if (file) {
    pic_preview.src = URL.createObjectURL(file)
  }
}
</script>
<?php $this->view('footer'); ?>
</div>