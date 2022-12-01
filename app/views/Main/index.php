<?php $this->view('header', 'Workshop'); ?><h1><center><big>Welcome to our inventory</big></center></h1>

<?php
	$this->view('Product/index' ,$data);
?>

<?php
	$this->view('footer');
?>
