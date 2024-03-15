<?php
namespace App\Repository;

use App\BusinessLogic\ExternalPeocess\RepositoryInterfaces\CreateRepositoryInterface;
use Exception;

class CreateRepository implements CreateRepositoryInterface{

    public function __construct(private $model){}


    public function create(array $data) {
        $recored = $this->model->create($data);

        return $recored?$recored:throw new Exception(" filed Created");

    }

}
