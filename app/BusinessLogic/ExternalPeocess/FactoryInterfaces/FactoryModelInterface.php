<?php
namespace App\BusinessLogic\ExternalPeocess\FactoryInterfaces;

use App\BusinessLogic\ExternalPeocess\EntityInterfaces\EntityInterface;
use App\BusinessLogic\InternalProcess\Core\UseCase\UserType;


interface FactoryModelInterface{

    public static function make(UserType $userType);

}

?>
