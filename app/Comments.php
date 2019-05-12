<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    protected $table = "comments";

    protected $fillable = [
        'comment', 'user_id', 'order_id'
    ];

    public function order()
    {
        return $this->belongsTo('App\Orders', 'order_id');
    }
}
