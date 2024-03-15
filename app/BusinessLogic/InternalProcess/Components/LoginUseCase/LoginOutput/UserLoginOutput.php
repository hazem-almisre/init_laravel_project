<?php

namespace App\BusinessLogic\InternalProcess\Components\LoginUseCase\LoginOutput;

use App\BusinessLogic\InternalProcess\Components\LoginUseCase\interfaces\LoginOutputInterface;



class UserLoginOutput implements LoginOutputInterface
{

    private String $firstName;
    private String $lastName;
    private String $phoneNumber;
    private String $gendor;
    private String $birthDay;
    private String $personalId;
    private String $token;

    public function __construct($data)
    {
        $this->firstName = $data['firstName'];
        $this->lastName = $data['lastName'];
        $this->phoneNumber = $data['phoneNumber'];
        $this->gendor = $data['gendor'];
        $this->birthDay = $data['birthDay'];
        $this->personalId = $data['personalId'];
        $this->token = $data['token'];
    }

    public function getOutputAsArray() : array
    {
        return [
            "firstName" => $this->firstName,
            "lastName" => $this->lastName,
            "phoneNumber" => $this->phoneNumber,
            "gendor" => $this->gendor,
            "birthDay" => $this->birthDay,
            "personalId" => $this->personalId,
            "token" => $this->token,
        ];
    }
}
