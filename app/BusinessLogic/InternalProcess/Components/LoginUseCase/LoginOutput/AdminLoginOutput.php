<?php

namespace App\BusinessLogic\InternalProcess\Components\LoginUseCase\LoginOutput;

use App\BusinessLogic\InternalProcess\Components\LoginUseCase\interfaces\LoginOutputInterface;

class AdminLoginOutput implements LoginOutputInterface
{

    private String $adminId;
    private String $name;
    private String $phoneNumber;
    private String $token;

    public function __construct($data)
    {
        $this->adminId = $data['adminId'];
        $this->name = $data['name'];
        $this->phoneNumber = $data['phoneNumber'];
        $this->token = $data['token'];
    }

    public function getOutputAsArray() : array
    {
        return [
            "adminId" => $this->adminId,
            "name" => $this->name,
            "phoneNumber" => $this->phoneNumber,
            "token" => $this->token,
        ];
    }
}
