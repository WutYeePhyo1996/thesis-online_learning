<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Assignment extends Model
{
    protected $fillable= [
        'file',
        'class_id',
    ];
    public function class(){
        $this->belongsTo('App\StudentClass');
    }
}
