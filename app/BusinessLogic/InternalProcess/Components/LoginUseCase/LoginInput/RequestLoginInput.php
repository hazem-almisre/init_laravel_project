<?php
namespace App\BusinessLogic\InternalProcess\Components\LoginUseCase\LoginInput;

use App\BusinessLogic\InternalProcess\Components\LoginUseCase\interfaces\LoginInputInterface;

class RequestLoginInput implements LoginInputInterface{

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


  public function toArray() :array {
        return [
            "phoneNumber" => $this->phoneNumber,
            "password" => $this->password
        ];
  }

}


