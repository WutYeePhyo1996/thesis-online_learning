<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Speaker extends Model
{
    protected $fillable=[
        'name',
        'position'
    ];

    public function lessons(){
        return $this->hasMany('App\AudioLesson');
    }
}
