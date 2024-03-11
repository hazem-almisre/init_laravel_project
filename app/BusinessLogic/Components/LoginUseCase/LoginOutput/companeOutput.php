<?php

namespace App\BusinessLogic\Components\LoginUseCase\LoginOutput;

use App\BusinessLogic\Components\LoginUseCase\LoginOutput\OutputLoginLogic;


class CompaneOutput implements OutputLoginLogic
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

    public function getOutputAsArray()
    {
        return [
            "name" => $this->name,
            "phoneNumber" => $this->phoneNumber,
            "token" => $this->token,
        ];
    }
}
