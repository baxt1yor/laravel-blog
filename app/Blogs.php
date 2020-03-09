<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blogs extends Model
{
    public $table = 'blogs';

    public $fillable = ['title', 'short', 'content', 'short', 'view'];
}
