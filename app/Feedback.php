<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    protected $fillable = [
        'first_name',
        'last_name',
        'contact_email',
        'contact_subject',
        'contact_message'
    ];
}
