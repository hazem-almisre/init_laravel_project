<?php

namespace App\BusinessLogic\Components\LoginUseCase\LoginOutput;

use App\BusinessLogic\Components\LoginUseCase\LoginOutput\OutputLoginLogic;


class EmployeeLoginOutput implements OutputLoginLogic
{

    private String $firstName;
    private String $lastName;
    private String $phoneNumber;
    private String $gendor;
    private String $image;
    // private String $companeId;
    private String $token;

    public function __construct($data)
    {
        $this->firstName = $data['firstName'];
        $this->lastName = $data['lastName'];
        $this->phoneNumber = $data['phoneNumber'];
        $this->gendor = $data['gendor'];
        $this->image = $data['image'];
        $this->token = $data['token'];
    }

    public function getOutputAsArray()
    {
        return [
            "firstName" => $this->firstName,
            "lastName" => $this->lastName,
            "phoneNumber" => $this->phoneNumber,
            "gendor" => $this->gendor,
            "image" => $this->image,
            "token" => $this->token,
        ];
    }
}
