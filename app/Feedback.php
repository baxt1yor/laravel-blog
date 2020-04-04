<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{ 
    const STATUS_UNREADED = 0;
    const STATUS_READED = 1;
    public $table = 'feedbacks';
    public $fillable = ['name', 'email', 'subject', 'message', 'status'];

    public function scopeUnreaded()
    {
        return $this->where('status', '=', self::STATUS_UNREADED);
    }

    
}
