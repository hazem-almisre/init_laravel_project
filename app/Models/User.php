<?php

namespace App\Models;

use Exception;
use Laravel\Passport\HasApiTokens;
use Illuminate\Support\Facades\Hash;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\BusinessLogic\ExternalPeocess\EntityInterfaces\UserEntityInterface;
use App\BusinessLogic\InternalProcess\Core\UseCase\GendorEnum;

class User extends Authenticatable implements UserEntityInterface
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = 'users';

    protected $primaryKey = 'userId';


    public function getFirstName() : String {
        return $this->firstName;
    }

    public function setFirstName($firstName) : void {
        $this->firstName = $firstName;
    }

    public function getLastName() : String {
        return $this->lastName;
    }

    public function setLastName($lastName) : void {
        $this->lastName = $lastName;
    }

    public function getphoneNubmer() : String{
        return $this->phoneNumber;
    }

    public function setphoneNubmer($phoneNumber) : void{
        $this->phoneNumber = $phoneNumber;
    }

    public function getGendor() : String{
        return $this->gendor;
    }

    public function setGendor($gendor) : void{
        if($gendor == GendorEnum::female->value || $gendor == GendorEnum::male->value){
            $this->gendor = $gendor;
        }
        else{
            throw new Exception("gendor is not a male or a female");
        }
    }

    public function getbirthDay() : String{
        return $this->birthDay;
    }

    public function setbirthDay($birthDay) : void{
        $this->birthDay = $birthDay;
    }

    public function getPassword() : String{
        return $this->password;
    }

    public function setPassword($password) : void{
        $this->password = Hash::make($password);
    }


    public function getPersonalId() : String{
        return $this->personalId;
    }

    public function setPersonalId($personalId) : void{
        $this->personalId = $personalId;
    }


    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'firstName',
        'lastName',
        'phoneNumber',
        'gendor',
        'birthDay',
        'password',
        'personalId'
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
}
