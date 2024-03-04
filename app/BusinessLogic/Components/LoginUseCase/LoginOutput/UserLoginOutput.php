<?php

namespace App\BusinessLogic\Components\LoginUseCase\LoginOutput;

use App\BusinessLogic\Components\LoginUseCase\LoginOutput\OutputLoginLogic;


class UserLoginOutput implements OutputLoginLogic
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

    public function getOutputAsArray()
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
