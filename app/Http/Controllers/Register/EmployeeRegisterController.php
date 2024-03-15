<?php

namespace App\Http\Controllers\Register;

use Illuminate\Http\Request;
use App\presenter\JsonResponse;
use App\FactoryModel\FactoryModel;
use App\Repository\ReadRepository;
use App\Http\Controllers\Controller;
use App\Repository\CreateRepository;
use App\BusinessLogic\InternalProcess\Core\UseCase\UserType;
use App\BusinessLogic\InternalProcess\Core\Message\ResponseMessage;
use App\BusinessLogic\InternalProcess\Components\RegisterUserCase\RegisterLogic\RegisterLogic;
use App\BusinessLogic\InternalProcess\Components\RegisterUserCase\RegisterInput\EmployeeRegisterInput;

class EmployeeRegisterController extends Controller
{
    public function __invoke(Request $request)
    {

        $data = $request->all();

        $model = FactoryModel::make(UserType::employee);

        $registerLogic = new RegisterLogic(
            new EmployeeRegisterInput($data),
            new ReadRepository($model),
            new CreateRepository($model)
        );

        return JsonResponse::sendSuccess($registerLogic->excute(), ResponseMessage::$loginSuccessfull);
    }
}
