<?php
namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'firstName',
        'lastName',
        'employeeId',
        'jobTitle',
        'email',
        'address',
        'password',
        'phoneNumber',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];
}
