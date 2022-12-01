<?php 

namespace app\models;

class Profile extends \app\core\Model {
	public function getAll(){
		$SQL= "SELECT * FROM profile";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute();
		$STMT->setFetchMode(\PDO::FETCH_CLASS, 'app\models\Profile');

		return $STMT->fetchAll();
	}

	public function get($profile_id){
		$SQL= "SELECT * FROM profile WHERE profile_id=:profile_id";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['profile_id'=>$profile_id]);
		$STMT->setFetchMode(\PDO::FETCH_CLASS, 'app\models\Profile');

		return $STMT->fetchAll();
	}

	public function getProfile($profile_id){
		$SQL ="SELECT * FROM profile WHERE profile_id=:profile_id";
		$STMT= self::$_connection->prepare($SQL);
		$STMT->execute(['profile_id'=>$profile_id]);
		$STMT->setFetchMode(\PDO::FETCH_CLASS, 'app\models\Profile');
		return $STMT->fetch();
	}

	public function getProfileByUser($user_id){
		$SQL= "SELECT * FROM profile WHERE user_id=:user_id";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['user_id'=>$user_id]);
		$STMT->setFetchMode(\PDO::FETCH_CLASS, 'app\models\Profile');

		return $STMT->fetch();
	}
	public function getUser($user_id){
		$SQL= "SELECT * FROM user WHERE user_id=:user_id";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['user_id'=>$user_id]);
		$STMT->setFetchMode(\PDO::FETCH_CLASS, 'app\models\User');

		return $STMT->fetchAll();
	}


	public function getReviews(){
		$SQL= "SELECT * FROM review WHERE profile_id=:profile_id, review=:review ORDER BY date DESC";

		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['profile_id'=>$profile_id, 'review'=>$review]);
		$STMT->setFetchMode(\PDO::FETCH_CLASS, 'app\models\Profile');

		return $STMT->fetchAll();
	}

	public function insert(){
		$SQL= "INSERT INTO profile(first_name, last_name, address, city, postal_code, user_id) VALUES (:first_name, :last_name, :address, :city, :postal_code, :user_id)";

		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['first_name'=>$this->first_name,
						'last_name'=>$this->last_name,
						'address'=>$this->address,
						'city'=>$this->city,
						'postal_code'=>$this->postal_code,
						'user_id'=>$this->user_id]);

		return self::$_connection->lastInsertId();
	}

	public function update(){
		$SQL= "UPDATE  profile SET first_name=:first_name, last_name=:last_name, address=:address, city=:city, postal_code=:postal_code WHERE profile_id=:profile_id";

		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['first_name'=>$this->first_name,
						'last_name'=>$this->last_name,
						'address'=>$this->address,
						'city'=>$this->city,
						'postal_code'=>$this->postal_code,
						'profile_id'=>$this->profile_id]);
	}

	public function delete(){
		$SQL = "DELETE FROM profile WHERE profile_id=:profile_id";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['profile_id'=>$this->profile_id]);
	}

	public function __toString(){
		return "$this->first_name,
				$this->last_name,
				$this->address,
				$this-> city,
				$this->postal_code,
				$this->user_id";
	}

} 