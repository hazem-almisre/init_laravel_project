<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;

class Compane extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = 'companes';

    protected $primaryKey = 'companeId';


    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'phoneNumber',
        'password',
    ];
    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * Get the subscribe associated with the Compane
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function subscribe()
    {
        return $this->hasOne(Subscribe::class);
    }

    /**
     * Get all of the employee for the Compane
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function employee()
    {
        return $this->hasMany(Employee::class);
    }
}
