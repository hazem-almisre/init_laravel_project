<?php
namespace App\BusinessLogic\Core\UseCase;

enum UserType : String {
    case user = "user";
    case compane = "compane";
    case employee = "employee";
    case admin = "admin";
}


?>
