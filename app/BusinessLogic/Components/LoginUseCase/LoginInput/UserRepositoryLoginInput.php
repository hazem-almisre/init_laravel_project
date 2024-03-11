<?php
namespace App\BusinessLogic\Components\LoginUseCase\LoginInput;

use Exception;
use Illuminate\Database\Eloquent\Model;

class UserRepositoryLoginInput{

    // private String $firstName;
    // private String $lastName;
    // private String $password;
    // private String $phoneNumber;
    // private String $gendor;
    // private String $birthDay;
    // private String $personalId;

    public function __construct(private Model $user){}


//   public function setPhoneNumber($phoneNumber){
//     if($phoneNumber == 1){
//         throw new Exception("phoneNumber number must be of string type");
//     }
//     $this->phoneNumber = $phoneNumber;
//   }

//   public function setPassword($password) {
//         $this->password = $password;
//   }

  public function getPassword() {
        return $this->user->password;
    }

// //   public function setUserType($userType) {
// //         $this->userType = $userType;
// //   }

//   public function getPhoneNumber() {
//     return $this->phoneNumber;
//   }

// //   public function getUserType() {
// //     return $this->userType;
// //   }

//   public function toArray() {
//         return [
//             "phoneNumber" => $this->phoneNumber,
//             "password" => $this->password
//         ];
//   }

    public function getModel() {
        return  $this->user;
    }

}


