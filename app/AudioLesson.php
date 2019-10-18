<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AudioLesson extends Model
{
    protected $fillable = [
        'speaker_id',
        'class_id',
        'file'
    ];

    public function speaker(){
    return $this->belongsTo('App\Speaker', 'speaker_id')->withDefault();
    }

    public function class(){
        return $this->belongsTo('App\Classes','class_id')->withDefault();
    }
}
