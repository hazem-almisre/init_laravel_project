<?php

namespace App\Http\Controllers\Login;

use Illuminate\Http\Request;
use App\presenter\JsonResponse;
use App\FactoryModel\FactoryModel;
use App\Repository\ReadRepository;
use App\Http\Controllers\Controller;
use App\BusinessLogic\InternalProcess\Core\UseCase\UserType;
use App\BusinessLogic\InternalProcess\Core\Message\ResponseMessage;
use App\BusinessLogic\InternalProcess\Components\LoginUseCase\LoginLogic\LoginLogic;
use App\BusinessLogic\InternalProcess\Components\LoginUseCase\LoginInput\RequestLoginInput;

class EmployeeLoginController extends Controller
{
    public function __invoke(Request $request)
    {


        $data = $request->all();

        $loginLogic = new LoginLogic(
            new RequestLoginInput($data),
            new ReadRepository(FactoryModel::make(UserType::employee)),
            UserType::employee
        );

        return JsonResponse::sendSuccess($loginLogic->excute(), ResponseMessage::$loginSuccessfull);
    }
}
