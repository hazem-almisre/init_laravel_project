<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subscribe extends Model
{
    use HasFactory;

    protected $table = 'subscribes';

    protected $primaryKey = 'subscribeId';


    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'companeId'
    ];

    /**
     * Get the compane that owns the Subscribe
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function compane()
    {
        return $this->belongsTo(Compane::class);
    }

}
