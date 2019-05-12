<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'role_id', 'status'

    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function services()
    {
        return $this->hasMany('App\Services', 'user_id');
    }

    public function ordersImade()
    {
        return $this->hasMany('App\Orders', 'user_order');
    }

    public function getMyServiceOrders()
    {
        return $this->hasMany('App\Orders', 'user_id');
    }

    public function getMessageIAdded()
    {
        return $this->hasMany('App\Messages', 'user_message_you');
    }

    public function getMessageIRecived()
    {
        return $this->hasMany('App\Messages', 'user_id');
    }

    public function getMyNotify()
    {
        return $this->hasMany('App\Notifications', 'user_notification_you');
    }

    public function getMyNotifications()
    {
        return $this->hasMany('App\Notifications', 'user_id');
    }

    public function votes()
    {
        return $this->hasMany('App\Votes', 'user_id');
    }
}
