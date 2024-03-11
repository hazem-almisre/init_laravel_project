<?php

namespace App\FactoryModel;

use Exception;
use App\Models\User;
use App\Models\Admin;
use App\Models\Compane;
use App\Models\Employee;
use App\BusinessLogic\Core\UseCase\UserType;

class FactoryModel
{

    static public function getFactoryModel(UserType $userType)
    {

        switch ($userType) {
            case UserType::user:
                return User::query();
                break;

            case UserType::compane:
                return Compane::query();
                break;

            case UserType::employee:
                return Employee::query();
                break;

            case UserType::admin:
                return Admin::query();
                break;

            default:
                throw new Exception("undifine model name");
                break;
        }
    }
}
