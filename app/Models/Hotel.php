<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Backpack\CRUD\CrudTrait;
use ViralsBackpack\BackPackImageUpload\Traits\HasImages;

class Hotel extends Model
{
    use CrudTrait;
    use HasImages;

    /*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
    */

    protected $table = 'hotels';
    // protected $primaryKey = 'id';
    // public $timestamps = false;
    // protected $guarded = ['id'];
    protected $fillable = ['name', 'address_id', 'rating'];
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
    public function address()
    {
        return $this->belongsTo(Address::class, 'address_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function events()
    {
        return $this->belongsToMany(Event::class, 'event_hotels');
    }

    public function provide()
    {
        return $this->belongsTo(Provide::class);
    }

    public function city()
    {
        return $this->belongsTo(City::class);
    }

    public function rooms()
    {
        return $this->hasMany(Room::class);
    }
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
