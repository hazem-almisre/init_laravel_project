<?php
namespace App\BusinessLogic\Components\LoginUseCase\LoginLogic;

use Exception;
use Illuminate\Support\Facades\Hash;

Class CheckPassowrdLoginLogic{

    static public function checkPassowrd($data) {
        return Hash::check($data['password'], $data['hashedPassword'])?true:
        throw new Exception("password is not correct");

    }

}

?>
