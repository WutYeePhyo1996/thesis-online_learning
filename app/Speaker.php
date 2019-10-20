<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Speaker extends Model
{
    protected $fillable=[
        'name',
        'class_id',
        'position'
    ];

    public function lessons(){
        return $this->hasMany('App\AudioLesson');
    }

    public function class(){
        return $this->belongsTo('App\Classes');
    }
}
