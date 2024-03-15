<?php
namespace App\BusinessLogic\InternalProcess\Components\LoginUseCase\interfaces;

interface LoginOutputInterface
{

    public function __construct($data);
    public function getOutputAsArray() : array;


}
