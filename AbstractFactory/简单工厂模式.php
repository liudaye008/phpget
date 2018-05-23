<?php

interface userPropertis{
	function getUserName();
	function getUserGender();
	function getUserAge();
}

class User implements userPropertis{
	private $userName;
	private $userGender;
	private $userAge;

	public function __construct($userName,$userGender,$userAge){
		$this->userName = $userName;
		$this->userGender = $userGender;
		$this->userAge = $userAge;
	}
	public function getUserName(){
		return $this->userName;
	}
	public function getUserGender(){
		return $this->userGender;
	}
	public function getUserAge(){
		return $this->userAge;
	}

}
class userFactory{
	static function createUser($propertis = []){
		return new User($propertis['userName'],$propertis['userGender'],$propertis['userAge']);
	}
}

$user1 = [
	"userName"=>"jake",
	"userGender"=>"man",
	"userAge"=>25
];

$uu = userFactory::createUser($user1);
echo $uu->getUserName();
echo $uu->getUserGender();
echo $uu->getUserAge();
