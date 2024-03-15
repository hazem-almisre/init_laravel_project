<?php
namespace App\BusinessLogic\InternalProcess\Components\RegisterUserCase\RegisterInput;

use Illuminate\Support\Facades\Hash;
use App\BusinessLogic\InternalProcess\Components\RegisterUserCase\interfaces\RegisterInputInterface;

class EmployeeRegisterInput implements RegisterInputInterface{

    public String $firstName;
    public String $lastName;
    public String $phoneNumber;
    public String $password;
    public String $gendor;
    public ?String $image;
    public String $birthDay;
    public int $companeId;


    function __construct($data)
    {

        $this->firstName = $data['firstName'];
        $this->lastName = $data['lastName'];
        $this->phoneNumber = $data['phoneNumber'];
        $this->setPassword($data['password']);
        $this->gendor = $data['gendor'];
        $this->image = $data['image'] ?? null;
        $this->birthDay = $data['birthDay'];
        $this->companeId = $data['companeId'];

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
            "image" => $this->image,
            "birthDay" => $this->birthDay,
            "companeId" => $this->companeId,
            "password" => $this->password,
        ];
    }

}

?>
