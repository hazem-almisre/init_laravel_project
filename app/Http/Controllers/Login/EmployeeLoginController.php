<?php

namespace App\Http\Controllers\Login;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\BusinessLogic\Components\LoginUseCase\LoginLogic\LoginLogic;
use App\BusinessLogic\Components\LoginUseCase\LoginInput\InputLoginLogic;

class EmployeeLoginController extends Controller
{
    public function __invoke(Request $request)
    {

        $data = $request->all();
        $data['userType'] = 'employee';
        $loginLogic = new LoginLogic(new InputLoginLogic($data));

        return $loginLogic->excute();

    }
}
