<?php

namespace App\FactoryModel;

use App\Models\User;
use Exception;

class FactoryModel
{

    static String $UESR = "user";

    static public function getFactoryModel(String $key)
    {

        switch ($key) {
            case 'user':
                return User::query();
                break;

            case 'compane':
                return User::query();
                break;

            case 'employee':
                return User::query();
                break;

            default:
                throw new Exception("undifine model name");
                break;
        }
    }
}
