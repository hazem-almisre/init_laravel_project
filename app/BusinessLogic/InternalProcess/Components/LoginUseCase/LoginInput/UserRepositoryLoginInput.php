<?php
namespace App\BusinessLogic\InternalProcess\Components\LoginUseCase\LoginInput;

use App\BusinessLogic\InternalProcess\Components\LoginUseCase\interfaces\LoginInputInterface;
use Illuminate\Database\Eloquent\Model;

class UserRepositoryLoginInput implements LoginInputInterface{


    public function __construct(private Model $user){}

    public function getPhoneNumber() {
        return $this->user->phoneNumber;
    }

    public function getPassword() {
        return $this->user->password;
    }


    public function getUserModel() {
        return  $this->user;
    }

    public function toArray() : array {
        return [
            "phoneNumber" => $this->getPhoneNumber(),
            "password" => $this->getPassword()
        ];
  }

}


