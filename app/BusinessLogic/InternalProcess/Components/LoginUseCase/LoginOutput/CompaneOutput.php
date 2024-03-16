<?php

namespace App\BusinessLogic\InternalProcess\Components\LoginUseCase\LoginOutput;

use App\BusinessLogic\InternalProcess\Components\LoginUseCase\interfaces\LoginOutputInterface;

class CompaneOutput implements LoginOutputInterface
{

    private String $companeId;
    private String $name;
    private String $phoneNumber;
    private String $token;

    public function __construct($data)
    {
        $this->companeId = $data['companeId'];
        $this->name = $data['name'];
        $this->phoneNumber = $data['phoneNumber'];
        $this->token = $data['token'];
    }

    public function getOutputAsArray() : array
    {
        return [
            "companeId" => $this->companeId,
            "name" => $this->name,
            "phoneNumber" => $this->phoneNumber,
            "token" => $this->token,
        ];
    }
}
