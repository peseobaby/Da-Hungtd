<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
     protected $table = 'feedbacks';
     protected $fillable = ['feedback', 'user_id', 'room_id', 'rate'];
}
