<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AudioLesson extends Model
{
    protected $fillable = [
        'speaker_id',
        'file'
    ];

    public function speaker(){
    return $this->belongsTo('App\Speaker', 'speaker_id')->withDefault();
    }

}
