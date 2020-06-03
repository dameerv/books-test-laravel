<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Book extends Model
{

    protected $fillable = [
        'title',
        'author_id',
        'description'
    ];
}
