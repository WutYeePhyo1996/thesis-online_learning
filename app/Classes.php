<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Classes extends Model
{
    protected $guarded = [];

    # Has Many Student
    public function students()
    {
        return $this->hasMany('App\User');
    }

    public function speakers(){
        return $this->hasMany('App\Speaker')->withDefatult();
    }
    # Has Many Assignemnt
}
