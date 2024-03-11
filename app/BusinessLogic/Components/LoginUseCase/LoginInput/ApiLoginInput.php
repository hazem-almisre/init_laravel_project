<?php
namespace App\BusinessLogic\Components\LoginUseCase\LoginInput;

use Exception;

class ApiLoginInput{

    private String $phoneNumber;
    private String $password;

  public function __construct(array $data)
  {

    $this->setPhoneNumber($data['phoneNumber']);

    $this->setPassword($data['password']);

  }


  public function setPhoneNumber($phoneNumber){
    $this->phoneNumber = $phoneNumber;
  }

  public function setPassword($password) {
        $this->password = $password;
  }

  public function getPassword() {
        return $this->password;
    }


  public function getPhoneNumber() {
    return $this->phoneNumber;
  }


  public function toArray() {
        return [
            "phoneNumber" => $this->phoneNumber,
            "password" => $this->password
        ];
  }

}


