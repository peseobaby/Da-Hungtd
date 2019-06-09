<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Backpack\CRUD\CrudTrait;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use CrudTrait;
    use HasRoles;
    use Notifiable;
    /*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
    */
    protected $guard_name = 'web';
    
    protected $table = 'users';
    // protected $primaryKey = 'id';
    // public $timestamps = false;
    // protected $guarded = ['id'];

    protected $fillable = [
        'name',
        'email',
        'password',
        'phone',
        'serial_number',
        'address',
        'user_id'
    ];

    // protected $hidden = [];
    // protected $dates = [];

    /*
    |--------------------------------------------------------------------------
    | FUNCTIONS
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | RELATIONS
    |--------------------------------------------------------------------------
    */


    /*
    |--------------------------------------------------------------------------
    | SCOPES
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | ACCESORS
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | MUTATORS
    |--------------------------------------------------------------------------
    */
}




    // /**
    //  * The attributes that are mass assignable.
    //  *
    //  * @var array
    //  */
    // protected $fillable = [
    //     'name', 'email', 'password',
    // ];

    // *
    //  * The attributes that should be hidden for arrays.
    //  *
    //  * @var array
     
    // protected $hidden = [
    //     'password', 'remember_token',
    // ];

    // /**
    //  * The attributes that should be cast to native types.
    //  *
    //  * @var array
    //  */
    // protected $casts = [
    //     'email_verified_at' => 'datetime',
    // ];