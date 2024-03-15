<?php
namespace App\BusinessLogic\ExternalPeocess\RepositoryInterfaces;


interface CreateRepositoryInterface{

    public function __construct($model);


    public function create(array $data);

}
