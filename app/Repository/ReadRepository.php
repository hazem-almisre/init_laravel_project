<?php
namespace App\Repository;

use App\Models\User;

class ReadRepository{

    public function __construct(private $model){}


    public function getFirstModelByValue($key,$value) {
        return $this->model->where($key,'=',$value)->first();
    }

    public function getById($id) {
        return $this->model->findOrFail($id);
    }

}
