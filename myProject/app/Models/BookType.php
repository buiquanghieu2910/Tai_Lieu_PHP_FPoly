<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookType extends Model
{
    protected $table = 'book_types';
    public $primaryKey = 'book_type_code';
    public $incrementing = true;
    public $timestamps = true;
    protected $attributes = [
        'book_type_name' => '',
    ];
}
