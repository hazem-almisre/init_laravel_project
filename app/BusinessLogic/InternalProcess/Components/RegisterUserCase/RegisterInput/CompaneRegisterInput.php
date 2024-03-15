<?php
namespace App\BusinessLogic\InternalProcess\Components\RegisterUserCase\RegisterInput;

use Illuminate\Support\Facades\Hash;
use App\BusinessLogic\InternalProcess\Components\RegisterUserCase\interfaces\RegisterInputInterface;

class CompaneRegisterInput implements RegisterInputInterface{

    public String $name;
    public String $phoneNumber;
    public String $password;

    function __construct(array $data)
    {
        $this->name = $data['name'];
        $this->phoneNumber = $data['phoneNumber'];
        $this->setPassword($data['password']);
    }

    public function setPassword($password){
        $this->password = Hash::make($password);
    }

    public function toArray() : array
    {
        return [
            "name" => $this->name,
            "phoneNumber" => $this->phoneNumber,
            "password" => $this->password
        ];
    }

}

?>
