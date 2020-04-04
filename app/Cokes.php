<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cokes extends Model
{
    public $table = 'cook';
    public $fillable = ['full_name', 'special', 'start_date', 'picture', 'google', 'facebook', 'instagram', 'twitter'];

    
}
