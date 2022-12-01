<?php $this->view('header', 'Workshop'); ?>

<p>Welcome to our invenotry.</p>

<?php
foreach ($data as $products) {
	$this->view('Product/index', $products);
}
?>

<?php
foreach ($data as $products) {
	$this->view('Product/index', $products);
}
?>

<?php $this->view('footer'); ?>
