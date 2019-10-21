<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudentClass extends Model
{
    protected $fillable =[
        'year'
    ];
    public function assignments(){
        $this->hasMany('App\Assignment');
    }
}
