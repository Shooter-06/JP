<?php
namespace app\models;

class Cart extends \app\core\Model{

	public function getALL(){
		$SQL = "SELECT * FROM cart"; 
		$STMT=self::$_connection->prepare($SQL);
		$STMT->execute();
		$STMT->setFetchMode(\PDO::FETCH_CLASS, 'app\models\Profile');
		return $STMT->fetchAll();
	}

	public function insert(){
		$SQL = "INSERT INTO cart (profile_id, product_id, qty, price )
         VALUES(:profile_id,:product_id,:qty, :price)";
        $STMT = self::$_connection->prepare($SQL);
        $STMT->execute(['profile_id' => $this->profile_id,'product_id' => $this->product_id,'qty' => $this->qty, 'price' => $this->price]);
	}

	public function getAllProfileProduct(){
		$SQL = "SELECT * FROM cart WHERE product_id=:product_id and profile_id=:profile_id"; 
		$STMT=self::$_connection->prepare($SQL);
		$STMT->execute(['profile_id' => $profile_id, 'product_id' => $product_id]);
		$STMT->setFetchMode(\PDO::FETCH_CLASS, 'app\models\Profile');
		return $STMT->fetchAll();
	}

	public function getProfile(){
		$SQL = "SELECT * FROM cart WHERE profile_id=:profile_id"; 
		$STMT=self::$_connection->prepare($SQL);
		$STMT->execute(['profile_id' => $profile_id]);
		$STMT->setFetchMode(\PDO::FETCH_CLASS, 'app\models\Profile');
		return $STMT->fetchAll();
	}

	public function update($cartId)
    {
        $SQL = "UPDATE cart SET qty=:qty where cart_id=:cart_id ";
        $STMT = self::$_connection->prepare($SQL);
        $STMT->execute(['qty' => $this->qty,'cart_id' => $cartId]);
    }

    public function delete($cartId)
    {
        $SQL = "DELETE FROM cart where cart_id=:cart_id ";
        $STMT = self::$_connection->prepare($SQL);
        $STMT->execute(['cart_id' => $cartId]);

    }
}