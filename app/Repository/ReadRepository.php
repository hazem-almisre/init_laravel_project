<?php
namespace App\Repository;

use Exception;
use App\Models\User;

class ReadRepository{

    public function __construct(private $model){}


    public function getFirstModelByValue($key,$value) {
        $recored = $this->model->where($key,'=',$value)->first();

        return $recored?$recored:throw new Exception("$key is not exit try agien");

    }

    public function getById($id) {
        return $this->model->findOrFail($id);
    }

}
