<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Services extends Model
{
    protected $table = "services";

    protected $fillable = [
        'name', 'description', 'image', 'price', 'cat_id', 'views', 'user_id'
    ];

    public function user()
    {
        return $this->belongsTo('App\User', 'user_id');
    }

    public function category()
    {
        return $this->belongsTo('App\Category', 'cat_id');
    }

    public function orders()
    {
        return $this->hasMany('App\Orders', 'service_id');
    }

    public function votes()
    {
        return $this->hasMany('App\Votes', 'service_id');
    }

}
