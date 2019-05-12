<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    protected $table = "orders";

    protected $fillable = [
        'service_id', 'user_id', 'user_order', 'price', 'type', 'status'
    ];

    public function comments()
    {
        return $this->hasMany('App\Comments', 'order_id');
    }

    public function service()
    {
        return $this->belongsTo('App\Services', 'service_id');
    }

    public function getMyOrders()
    {
        return $this->belongsTo('App\User', 'user_order');
    }

    public function getUserAddService()
    {
        return $this->belongsTo('App\User', 'user_id');
    }
}
