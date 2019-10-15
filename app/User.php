<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;
    
    const ADMIN_TYPE = 'admin';
    const DEFAULT_TYPE = 'student';
    const TEACHER_TYPE = 'teacher';

    public function isAdmin()    {        
        return $this->type === self::ADMIN_TYPE;    
    }
    public function isTeacher()
    {
        return $this->type === self::TEACHER_TYPE;
    }
    public function isStudent() 
    {
        return $this->type === self::DEFAULT_TYPE;
    }
    /**
    * The attributes that are mass assignable.
    *
    * @var array
    */
    protected $fillable = [
        'name', 'email', 'password','type','class_id'
    ];
    
    # Relation Ship Function
    public function class()
    {
        return $this->belongsTo('App\Classes');
    }
    
    
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
}
