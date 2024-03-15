<?php
namespace App\BusinessLogic\InternalProcess\Components\LoginUseCase\LoginLogic;

use Exception;
use App\BusinessLogic\InternalProcess\Core\UseCase\UserType;
use App\BusinessLogic\InternalProcess\Components\LoginUseCase\LoginOutput\CompaneOutput;
use App\BusinessLogic\InternalProcess\Components\LoginUseCase\LoginOutput\UserLoginOutput;
use App\BusinessLogic\InternalProcess\Components\LoginUseCase\LoginOutput\AdminLoginOutput;
use App\BusinessLogic\InternalProcess\Components\LoginUseCase\interfaces\LoginOutputInterface;
use App\BusinessLogic\InternalProcess\Components\LoginUseCase\LoginOutput\EmployeeLoginOutput;

class DetermineOutputFactory{

    public static function determineOutputLoginByUserType($userType, $data) : LoginOutputInterface
    {
        $output = null;
        switch ($userType) {
            case UserType::user:
                $output = new UserLoginOutput($data);
                break;
            case UserType::admin:
                $output = new AdminLoginOutput($data);
                break;
            case UserType::employee:
                $output = new EmployeeLoginOutput($data);
                break;
            case UserType::compane:
                $output = new CompaneOutput($data);
                break;
            default:
                throw new Exception("undifine user type");
                break;
        }
        return $output;
    }

}


?>
