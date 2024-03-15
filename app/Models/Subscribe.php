<?php

namespace App\Models;

use App\BusinessLogic\ExternalPeocess\EntityInterfaces\SubscribeEntityInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subscribe extends Model implements SubscribeEntityInterface
{
    use HasFactory;

    protected $table = 'subscribes';

    protected $primaryKey = 'subscribeId';



    public function getName() : String {
        return $this->name;
    }

    public function setName($name) : void {
        $this->name = $name;
    }
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
    ];

}
