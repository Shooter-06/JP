<?php
namespace app\models;

class Product extends \app\core\Model{
	public function search($searching){
		$SQL ="SELECT * FROM Product WHERE description LIKE :searching";
		$STMT = self::$_connection->prepare($SQL);
		$STMT = execute(['searching'=>"%$searching%"]);
		$STMT->setFetchMode(\PDO::FETCH_CLASS, 'app\models\Product');
		return $STMT->fetchAll();
	}

	public function __toString(){
		return "$this->profile_id
				$this->title $this->description
				$this->price";
	}

	public function get($product_id){
		$SQL ="SELECT * FROM product WHERE product_id=:product_id";
		$STMT= self::$_connection->prepare($SQL);
		$STMT->execute(['product_id'=>$product_id]);
		$STMT->setFetchMode(\PDO::FETCH_CLASS, 'app\models\Product');
		return $STMT->fetch();
	}

	public function getProfile($profile_id){
		$SQL ="SELECT * FROM profile WHERE profile_id=:profile_id";
		$STMT= self::$_connection->prepare($SQL);
		$STMT->execute(['profile_id'=>$profile_id]);
		$STMT->setFetchMode(\PDO::FETCH_CLASS, 'app\models\Profile');
		return $STMT->fetch();
	}

	public function getForProfile($profile_id){
		$SQL ="SELECT * FROM product WHERE profile_id=:profile_id";
		$STMT= self::$_connection->prepare($SQL);
		$STMT->execute(['profile_id'=>$profile_id]);
		$STMT->setFetchMode(\PDO::FETCH_CLASS, 'app\models\Product');
		return $STMT->fetchAll();
	}

	public function getAll(){
		$SQL ="SELECT * FROM product";
		$STMT= self::$_connection->prepare($SQL);
		$STMT->execute();
		$STMT->setFetchMode(\PDO::FETCH_CLASS, 'app\models\Product');
		return $STMT->fetch();
	}

	public function insert(){
		$SQL = "INSERT INTO product(profile_id, title, description, price) VALUES (:profile_id, :title, :description, :price)";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['profile_id'=>$this->profile_id,
						'title'=>$this->title,
						'description'=>$this->description,
						'price'=>$this->price]);
		//return $STMT->execute();
		return self::$_connection->lastInsertId();
	}

	public function update(){
		$SQL = "UPDATE product SET profile_id=:profile_id, title=:title, description=:description WHERE product_id=:product_id";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['profile_id'=>$this->profile_id,
						'title'=>$this->title,
						'description'=>$this->description,
						'price'=>$this->price,
						'product_id'=>$this->product_id]);
	}

	public function delete(){
		$SQL = "DELETE FROM product WHERE product_id=:product_id";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['product_id'=>$this->product_id]);
	}
}