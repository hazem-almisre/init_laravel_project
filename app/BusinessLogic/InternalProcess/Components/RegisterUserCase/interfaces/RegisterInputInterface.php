<?php
namespace App\BusinessLogic\InternalProcess\Components\RegisterUserCase\interfaces;

interface RegisterInputInterface{

    function __construct(array $data);

    public function toArray() : array;

}

?>
