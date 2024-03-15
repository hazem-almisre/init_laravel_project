<?php
namespace App\BusinessLogic\InternalProcess\Components\RegisterUserCase\RegisterLogic;

use App\Repository\CreateRepository;
use App\BusinessLogic\InternalProcess\Core\Constent;
use App\BusinessLogic\InternalProcess\Core\Interfaces\LogicInterface;
use App\BusinessLogic\ExternalPeocess\RepositoryInterfaces\ReadRepositoryInterface;
use App\BusinessLogic\InternalProcess\Components\RegisterUserCase\interfaces\RegisterInputInterface;

class RegisterLogic implements LogicInterface
{


    function __construct(
        private RegisterInputInterface $registerInput,
        private ReadRepositoryInterface $readRepository,
        private CreateRepository $createRepository
    ) {}


    public function excute()
    {

        $this->readRepository->excptionIfFindOne(Constent::$PHONE_NUMBER
                                                ,$this->registerInput->phoneNumber);

        $user = $this->createRepository->create($this->registerInput->toArray());

        return  $user;
    }


}
