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

    # Has Many Assignemnt
}
