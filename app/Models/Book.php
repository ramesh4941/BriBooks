<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    protected $fillable = [
        'about_author',
        'author_photo',
        'author_name',
        'book_description',
        'back_cover',
        'front_cover',
        'book_name',
        'page_content',
    ];

}
