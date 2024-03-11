<?php

namespace App\BusinessLogic\Components\LoginUseCase\LoginLogic;

use App\Repository\UserTokenRepository;
use App\BusinessLogic\Core\UseCase\UserType;
use App\BusinessLogic\Components\LoginUseCase\LoginInput\ApiLoginInput;
use App\BusinessLogic\Components\LoginUseCase\LoginInput\UserRepositoryLoginInput;

class LoginLogic
{


    function __construct(
        private ApiLoginInput $apiLoginInput,
        private UserRepositoryLoginInput $userRepositoryLoginInput,
        private UserType $userType = UserType::user
    ) {}


    function excute()
    {

        $user = $this->userRepositoryLoginInput->getModel();
        CheckPassowrdLoginLogic::checkPassowrd([
            "password" => $this->apiLoginInput->getPassword(),
            "hashedPassword" => $this->userRepositoryLoginInput->getPassword()
        ]);

        $user['token'] = UserTokenRepository::getToken($user);

        return  DetermineOutput::determineOutputLoginByUserType(
                $this->userType,
                $user
            );
    }


}
