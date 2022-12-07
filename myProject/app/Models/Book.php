<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\BookType;

class Book extends Model
{
    protected $table = 'bookTypes';
    public $primaryKey = 'book_code';
    public $incrementing = true;
    public $timestamps = true;
    protected $attributes = [
        'book_name' => '',
        'book_type_code' => BookType::class,
    ];
}
