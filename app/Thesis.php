<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class Thesis extends Model
{
    protected $fillable = [
        'title',
        'author',
        'academic_year',
        'rollno',
        'abstract',
        'file',
    ];

    public function filePath()
    {
        return "/storage/pdf/{$this->file}";
    }
}
