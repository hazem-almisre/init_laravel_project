<?php
namespace App\BusinessLogic\ExternalPeocess\RepositoryInterfaces;


interface ReadRepositoryInterface{

    public function __construct($model);

    public function getFirstModelByValue($key,$value) ;

    public function excptionIfFindOne($key , $value);

    public function getById($id);

}
