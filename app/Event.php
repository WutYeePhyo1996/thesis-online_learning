<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable =[
        'eventType_id',
        'name',
        'description',
    ];

    public function eventType(){
        return $this->belongsTo('App\EventType', 'eventType_id')->withDefault();
    }

    public function event_imgs(){
        return $this->hasMany('App\EventImage');
    }
}
