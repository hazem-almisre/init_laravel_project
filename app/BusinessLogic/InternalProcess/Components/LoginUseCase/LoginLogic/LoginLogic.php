<?php

namespace App\BusinessLogic\InternalProcess\Components\LoginUseCase\LoginLogic;

use App\Repository\UserTokenRepository;
use App\BusinessLogic\InternalProcess\Core\Constent;
use App\BusinessLogic\InternalProcess\Core\UseCase\UserType;
use App\BusinessLogic\InternalProcess\Core\Interfaces\LogicInterface;
use App\BusinessLogic\ExternalPeocess\RepositoryInterfaces\ReadRepositoryInterface;
use App\BusinessLogic\InternalProcess\Components\LoginUseCase\LoginInput\RequestLoginInput;
use App\BusinessLogic\InternalProcess\Components\LoginUseCase\LoginLogic\CheckPassowrdLoginLogic;
use App\BusinessLogic\InternalProcess\Components\LoginUseCase\LoginInput\UserRepositoryLoginInput;

class LoginLogic implements LogicInterface
{


    function __construct(
        private RequestLoginInput $requestLoginInput,
        private ReadRepositoryInterface $readRepository,
        private UserType $userType = UserType::user
    ) {}


    public function excute()
    {

        $user = $this->readRepository->getFirstModelByValue(Constent::$PHONE_NUMBER, $this->requestLoginInput->getPhoneNumber());

        $userRepositoryLoginInput = new UserRepositoryLoginInput($user);

        CheckPassowrdLoginLogic::checkPassowrd([
            "password" => $this->requestLoginInput->getPassword(),
            "hashedPassword" => $userRepositoryLoginInput->getPassword()
        ]);

        $user['token'] = UserTokenRepository::getToken($userRepositoryLoginInput->getUserModel());

        return  DetermineOutputFactory::determineOutputLoginByUserType(
                $this->userType,
                $user
            )->getOutputAsArray();
    }


}
