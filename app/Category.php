<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = "categories";

    protected $fillable = [
        'name', 'description'
    ];

    public function services()
    {
        return $this->hasMany('App\Services', 'cat_id');
    }
}
