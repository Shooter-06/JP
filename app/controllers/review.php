<?php
namespace app\controlllers;

#[\app\filters\MainUser]
#[\app\filters\Login]
#[\app\filters\Profile]
class review extends \app\core\Controller{
	public function index(){
		$review = new \app\models\Review();
		$reviews = $review->getAll();
		$this->view('Review/index', $review);			
	}

	public function add($product_id){
		if(isset($_POST['action'])){
			$review=new \app\models\Review();

			$review->review =$_POST['review'];
			$review->product_id=$_SESSION['product_id'];
			$review->profile_id=$_SESSION['profile_id'];
			$review->review=$_POST['review'];
			$review->date=$_POST['date'];
			$review_id = $review->insert();
		}
		header("location:/Review/details");	
	}

	public function edit($review_id){
		$review=new \app\models\Review();

		$review=$review->getProduct($product_id);
		$review_id=$review->review_id;	

		if(isset($_POST['action']) && $review->profile_id == $_SESSION['profile_id']){
			$review->review =$_POST['review'];
			$review->date=$_POST['date'];
			$review_id = $review->update();
		}	
		header("location:/Review/details");	
	}

	public function delete($review_id){
		$review=new \app\models\Review();
		$review=$product_id->getProducts();  //get($product_id);
		$review_id=$review->review_id;	

		if($review->product_id == $_SESSION['product_id']){
			$review->delete();
		}
		header("location:/Review/details/$product_id");	
	}

}