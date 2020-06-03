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


    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);

    }

    public function getAuthor()
    {
        return Author::find($this->author_id);

    }
}
