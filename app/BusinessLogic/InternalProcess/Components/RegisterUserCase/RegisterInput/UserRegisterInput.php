<?php
namespace App\BusinessLogic\InternalProcess\Components\RegisterUserCase\RegisterInput;

use Illuminate\Support\Facades\Hash;
use App\BusinessLogic\InternalProcess\Components\RegisterUserCase\interfaces\RegisterInputInterface;

class UserRegisterInput implements RegisterInputInterface{

    public String $firstName;
    public String $lastName;
    public String $phoneNumber;
    public String $password;
    public String $gendor;
    public String $personalId;
    public String $birthDay;


    function __construct($data)
    {

        $this->firstName = $data['firstName'];
        $this->lastName = $data['lastName'];
        $this->phoneNumber = $data['phoneNumber'];
        $this->setPassword($data['password']);
        $this->gendor = $data['gendor'];
        $this->personalId = $data['personalId'];
        $this->birthDay = $data['birthDay'];

    }

    public function setPassword($password){
        $this->password = Hash::make($password);
    }


    public function toArray() : array
    {
        return [
            "firstName" => $this->firstName,
            "lastName" => $this->lastName,
            "phoneNumber" => $this->phoneNumber,
            "gendor" => $this->gendor,
            "birthDay" => $this->birthDay,
            "personalId" => $this->personalId,
            "password" => $this->password,
        ];
    }

}

?>
