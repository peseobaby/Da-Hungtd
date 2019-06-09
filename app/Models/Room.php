<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Backpack\CRUD\CrudTrait;
use App\Models\Convenience;
use ViralsBackpack\BackPackImageUpload\Traits\HasImages;

class Room extends Model
{
    use CrudTrait;
    use HasImages;

    /*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
    */

    protected $table = 'rooms';
    // protected $primaryKey = 'id';
    // public $timestamps = false;
    // protected $guarded = ['id'];
    protected $fillable = ['name', 'type_id', 'capacity', 'num_bed_room', 'area', 'price',
                            'active', 'convenience_id'];
    // protected $hidden = [];
    // protected $dates = [];

    /*
    |--------------------------------------------------------------------------
    | FUNCTIONS
    |--------------------------------------------------------------------------
    */
    public function getAllConvenience()
    {
        return Convenience::getConvenience(explode(':', @$this->convenience->content));
    }
    /*
    |--------------------------------------------------------------------------
    | RELATIONS
    |--------------------------------------------------------------------------
    */
    public function type()
    {
        return $this->belongsTo('App\Models\RoomType', 'type_id');
    }

    public function convenience()
    {
        return $this->belongsTo(RoomHasConvenience::class, 'convenience_id');
    }

    public function hotel()
    {
        return $this->belongsTo('App\Models\Hotel', 'hotel_id');
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
