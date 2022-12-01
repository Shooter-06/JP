<div class='jumbotron' id='review<?=$data->review_id?>'>
	<hr>
	<?php $profile=$data->getProfile(); ?>
	<p>This review was done by <a href='/Profile/details/<?=$profile->profile_id ?>'><?= htmlspecialchars($profile) ?></a> 
		<?php
		if(isset($_SESSION['profile_id']) && $_SESSION['profile_id'] == $data->profile_id){

			echo "<a href='/Review/edit/$data->review_id'><i class='glyphicon glyphicon-pencil'></i></a>";
			\n
			echo "<a href='/Review/delete/$data->review_id'><i class='fa fa-trash'></i></a>";
			?>

	<form action='/Review/edit/<?=$data->review_id?>' method="post">
		<div class="input-group">
			<input class='form-control' type="text" name="review" id='reviewEdit<?=$data->review_id?>' placeholder="review" value='<?=htmlspecialchars($data->review)?>' disabled/>
			<button type='submit' name='action' class='btn btn-success' disabled><i class='bi-send'></i></button>
		</div>
	</form>
	<?php }else{?>
	</p><p><?=htmlspecialchars($data->review) ?></p>
	<?php	}
	?>
</div>
