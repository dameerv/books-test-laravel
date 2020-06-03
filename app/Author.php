<?php

namespace App;

use App\Book;
use Illuminate\Database\Eloquent\Model;


class Author extends Model
{
    protected $fillable =[
        'name',
        'information'
    ];

    public function getBooksQuantity()
    {
        $booksCount = Book::where("author_id", $this->id)->count();

        return $booksCount;
    }
}
