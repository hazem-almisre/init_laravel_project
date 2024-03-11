<?php
namespace App\BusinessLogic\Components\LoginUseCase\LoginLogic;

use App\BusinessLogic\Core\UseCase\UserType;
use App\BusinessLogic\Components\LoginUseCase\LoginOutput\CompaneOutput;
use App\BusinessLogic\Components\LoginUseCase\LoginOutput\UserLoginOutput;
use App\BusinessLogic\Components\LoginUseCase\LoginOutput\EmployeeLoginOutput;

class DetermineOutput{

    public static function determineOutputLoginByUserType($userType, $data)
    {
        // this operation not work most have if-else statment
        $outputLogin = [
            UserType::user->value =>  new UserLoginOutput($data),
            UserType::compane->value => new CompaneOutput($data),
            UserType::employee->value => new EmployeeLoginOutput($data)
        ];
        return $outputLogin[$userType->value]->getOutputAsArray();
    }

}


?>
