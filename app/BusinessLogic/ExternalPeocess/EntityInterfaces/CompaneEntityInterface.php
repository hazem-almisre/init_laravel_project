<?php
namespace App\BusinessLogic\ExternalPeocess\EntityInterfaces;

use App\BusinessLogic\ExternalPeocess\EntityInterfaces\EntityInterface;

interface CompaneEntityInterface extends EntityInterface{

    public function getName() : String ;

    public function setName($name) : void ;

    public function getphoneNubmer() : String;

    public function setphoneNubmer($phoneNumber) : void;

    public function getPassword() : String;

    public function setPassword($password) : void;

    public function getSubscribeId() : int;

}

?>
