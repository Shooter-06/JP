<?php
namespace	app\models;

class Inventory extends \app\core\Model{
	public function getAll($product_id){
		$SQL= "SELECT * FROM inventory WHERE product_id	=:product_id";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute();
		$STMT->setFetchMode(\PDO::FETCH_CLASS, 'app\models\Profile');

		return $STMT->fetchAll();
	}

	public function delete(){
		$SQL = "DELETE FROM category WHERE category_id=:category_id";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['category_id'=>$this->category_id]);
	}
}