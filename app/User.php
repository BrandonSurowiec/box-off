<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    protected $guarded = [];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    // relationship                    local key on table || foreign key on current table 
    function location()
    {
        return $this->belongsTo(Location::class); // location_id
    }

    function status(){
        return $this->hasOne('App\Status', 'id', 'status_id'); 
    }

    function club()
    {
        return $this->hasOne('App\Club', 'id', 'club_id')->withDefault(['name' => 'No Club']); 
    }

    function record()
    {
        return $this->hasOne('App\Record','id', 'id'); // make it so that this page isnt even visible to 
                                                       // people that arent boxers and coaches 
    }
// $user->avatar
    function getAvatarAttribute($value)
    {
        // default('default.jpg')
        // if (empty($value)) {
        //     return url('/uploads/avatar/default.jpg');
        // }

        // isset($value)

        return $value ?? url('/uploads/avatar/default.jpg');
    }
}
