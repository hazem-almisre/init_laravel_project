<?php
namespace App\Repository;

use Exception;
use App\BusinessLogic\ExternalPeocess\RepositoryInterfaces\ReadRepositoryInterface;

class ReadRepository implements ReadRepositoryInterface{

    public function __construct(private $model){}


    public function getFirstModelByValue($key,$value) {
        $recored = $this->model->where($key,'=',$value)->first();

        return $recored?$recored:throw new Exception("$key is not exit create one");

    }

    public function excptionIfFindOne($key , $value){
        $recored = $this->model->where($key,'=',$value)->first();

        return $recored?throw new Exception("$key alredy ecxit"):$recored;
    }

    public function getById($id) {
        return $this->model->findOrFail($id);
    }

}
