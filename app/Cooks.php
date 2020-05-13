<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cooks extends Model
{
    public $table = 'cook';
    public $fillable = ['full_name', 'special', 'start_date', 'picture', 'google', 'facebook', 'instagram', 'twitter'];

}
