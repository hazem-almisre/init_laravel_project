<?php
namespace App\BusinessLogic\Components\LoginUseCase\LoginLogic;

use App\FactoryModel\FactoryModel;
use App\Repository\ReadRepository;
use App\BusinessLogic\Components\LoginUseCase\LoginInput\InputLoginLogic;
use App\BusinessLogic\Components\LoginUseCase\LoginOutput\UserLoginOutput;

Class LoginLogic{


    function __construct(private InputLoginLogic $inputLoginLogic){}

    function excute()
    {

        $data = new ReadRepository(FactoryModel::getFactoryModel($this->inputLoginLogic->getUserType()));

        //code for generate token -> $data['token'] = $token

        return $this->getOutputLoginByUserType($this->inputLoginLogic->getUserType()
        ,$data->getFirstModelByValue("phoneNumber",$this->inputLoginLogic->getPhoneNumber()));

    }


    private function getOutputLoginByUserType($userType,$data){
        $outputLogin = [
            "user" =>  new UserLoginOutput($data),
            // "compane" =>
            // "employee" =>
        ];

        return $outputLogin[$userType];
    }

}
?>
