<?php

namespace App\BusinessLogic\InternalProcess\Components\LoginUseCase\LoginOutput;

use App\BusinessLogic\InternalProcess\Components\LoginUseCase\interfaces\LoginOutputInterface;

class CompaneOutput implements LoginOutputInterface
{

    private String $name;
    private String $phoneNumber;
    private String $token;

    public function __construct($data)
    {
        $this->name = $data['name'];
        $this->phoneNumber = $data['phoneNumber'];
        $this->token = $data['token'];
    }

    public function getOutputAsArray() : array
    {
        return [
            "name" => $this->name,
            "phoneNumber" => $this->phoneNumber,
            "token" => $this->token,
        ];
    }
}
