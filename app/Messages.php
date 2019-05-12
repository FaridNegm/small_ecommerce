<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Messages extends Model
{
    protected $table = "messages";

    protected $fillable = [
        'title', 'message', 'user_message_you', 'user_id', 'seen'
    ];

    public function getSendUser()
    {
        return $this->belongsTo('App\User', 'user_message_you');
    }

    public function getResivedUser()
    {
        return $this->belongsTo('App\User', 'user_id');
    }
}
