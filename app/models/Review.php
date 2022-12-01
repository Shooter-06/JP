<?php
namespace app\models;


class Review extends \app\core\Model{
	public function get($review_id){
		$SQL = "SELECT * FROM review WHERE review_id=:review_id";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['review_id'=>$review_id]);
		$STMT->setFetchMode(\PDO::FETCH_CLASS, 'app\models\Review');
		return $STMT->fetch();
	}

	public function insert(){
		$SQL = "INSERT INTO review(product_id, profile_id, review, date) VALUES (:product_id,:profile_id, :review,:date)";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['product_id'=>$this->product_id,
						'profile_id'=>$this->profile_id,
						'review'=>$this->review,
						'date'=>$this->date]);
		return self::$_connection->lastInsertId();
	}

	public function update(){
		$SQL = "UPDATE review SET product_id=:product_id, profile_id=:profile_id, review=:review, date=:date WHERE review_id=:review_id";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['product_id'=>$this->product_id,
						'profile_id'=>$this->profile_id,
						'review'=>$this->review,
						'date'=>$this->date]);
	}

	public function delete(){
		$SQL = "DELETE FROM review WHERE review_id=:review_id";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['review_id'=>$this->review_id]);
	}

	public function getProfile($profile_id){
		$SQL = "SELECT * FROM profile WHERE profile_id=:profile_id";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['profile_id'=>$this->profile_id]);
		$STMT->setFetchMode(\PDO::FETCH_CLASS, 'app\models\Profile');
		return $STMT->fetch();
	}

	public function getProducts($product_id){
		$SQL = "SELECT * FROM product WHERE product_id=:product_id";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['product_id'=>$this->product_id]);
		$STMT->setFetchMode(\PDO::FETCH_CLASS, 'app\models\Product');
		return $STMT->fetch();
	}

	public function delete(){
		$SQL = "DELETE FROM review WHERE review_id=:review_id";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['review_id'=>$this->review_id]);
	}
}