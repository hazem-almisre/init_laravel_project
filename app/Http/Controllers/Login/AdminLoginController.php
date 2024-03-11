<?php

namespace App\Http\Controllers\Login;

use Illuminate\Http\Request;
use App\presenter\JsonResponse;
use App\FactoryModel\FactoryModel;
use App\Repository\ReadRepository;
use App\Http\Controllers\Controller;
use App\BusinessLogic\Core\UseCase\UserType;
use App\BusinessLogic\Core\Message\ResponseMessage;
use App\BusinessLogic\Components\LoginUseCase\LoginLogic\LoginLogic;
use App\BusinessLogic\Components\LoginUseCase\LoginInput\ApiLoginInput;
use App\BusinessLogic\Components\LoginUseCase\LoginInput\UserRepositoryLoginInput;
use App\BusinessLogic\Core\Constent;

class AdminLoginController extends Controller
{
    public function __invoke(Request $request)
    {

        $data = $request->all();

        $user = new ReadRepository(FactoryModel::getFactoryModel(UserType::admin));

        $loginLogic = new LoginLogic(
            new ApiLoginInput($data),
            new UserRepositoryLoginInput($user->getFirstModelByValue(Constent::$PHONE_NUMBER, $data['phoneNumber'])),
            UserType::admin
        );

        return JsonResponse::sendSuccess($loginLogic->excute(), ResponseMessage::$loginSuccessfull);
    }
}
