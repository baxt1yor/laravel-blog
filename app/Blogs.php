<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blogs extends Model
{
    public $table = 'blogs';

    public $fillable = ['title', 'short', 'content', 'short', 'img','thumb', 'view'];

    public function scopeMostViews()
    {
        return $this->orderBy('view', 'DESC')->limit(4);
    }
}
