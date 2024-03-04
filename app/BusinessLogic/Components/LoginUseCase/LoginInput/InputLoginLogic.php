<?php
namespace App\BusinessLogic\Components\LoginUseCase\LoginInput;

use Exception;

class InputLoginLogic{

    private String $phoneNumber;
    private String $password;
    private String $userType;

  public function __construct(array $data)
  {

    $this->setPhoneNumber($data['phoneNumber']);

    $this->setPassword($data['password']);

    $this->setUserType($data['userType']);


  }


  public function setPhoneNumber($phoneNumber){
    if($phoneNumber == 1){
        throw new Exception("phoneNumber number must be of string type");
    }
    $this->phoneNumber = $phoneNumber;
  }

  public function setPassword($password) {
        $this->password = $password;
  }

  public function setUserType($userType) {
        $this->userType = $userType;
  }

  public function getPhoneNumber() {
    return $this->phoneNumber;
  }

  public function getUserType() {
    return $this->userType;
  }

  public function toArray() {
        return [
            "phoneNumber" => $this->phoneNumber,
            "password" => $this->password
        ];
  }

}


