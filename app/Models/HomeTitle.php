<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomeTitle extends Model
{
    use HasFactory;

    protected $fillable = [
        'heading',
        'image',
        'paragraph',
        'text_link',
    ];

}
