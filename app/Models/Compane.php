<?php

namespace App\Models;

use App\BusinessLogic\ExternalPeocess\EntityInterfaces\CompaneEntityInterface;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;
use Laravel\Passport\HasApiTokens;

class Compane extends Authenticatable implements CompaneEntityInterface
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = 'companes';

    protected $primaryKey = 'companeId';

    public function getName() : String {
        return $this->name;
    }

    public function setName($name) : void {
        $this->name = $name;
    }

    public function getphoneNubmer() : String{
        return $this->phoneNumber;
    }

    public function setphoneNubmer($phoneNumber) : void{
        $this->phoneNumber = $phoneNumber;
    }

    public function getPassword() : String{
        return $this->password;
    }

    public function setPassword($password) : void{
        $this->password = Hash::make($password);
    }

    public function getSubscribeId() : int{
        return $this->subscribeId;
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'phoneNumber',
        'password',
        "subscribeId"
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
     * Get the subscribe that owns the Compane
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function subscribe()
    {
        return $this->belongsTo(Subscribe::class);
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
