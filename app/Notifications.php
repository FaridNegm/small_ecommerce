<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notifications extends Model
{
    protected $table = "notifications";

    protected $fillable = [
        'notifcation_id', 'type', 'user_id', 'user_notification_you', 'seen', 'url'
    ];

    public function getUserSendNotification()
    {
        return $this->belongsTo('App\User', 'user_notification_you');
    }

    public function getUserRecivedNotification()
    {
        return $this->belongsTo('App\User', 'user_id');
    }
}
