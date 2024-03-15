<?php
namespace App\BusinessLogic\ExternalPeocess\EntityInterfaces;

use App\BusinessLogic\ExternalPeocess\EntityInterfaces\EntityInterface;

interface EmployeeEntityInterface extends EntityInterface{

    public function getFirstName() : String ;

    public function setFirstName($firstName) : void ;

    public function getLastName() : String ;

    public function setLastName($lastName) : void ;

    public function getphoneNubmer() : String;

    public function setphoneNubmer($phoneNumber) : void;

    public function getGendor() : String;

    public function setGendor($gendor) : void;

    public function getImage() : String;

    public function setImage($image) : void;

    public function getbirthDay() : String;

    public function setbirthDay($birthDay) : void;

    public function getPassword() : String;

    public function setPassword($password) : void;


    public function getCompaneId() : int;

}

?>
