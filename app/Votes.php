<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Votes extends Model
{
    protected $table = "votes";

    protected $fillable = [
        'user_id', 'service_id', 'vote'
    ];

    public function user()
    {
        return $this->belongsTo('App\User', 'user_id');
    }

    public function service()
    {
        return $this->belongsTo('App\Services', 'service_id');
    }
}
