<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomeTitle extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_status',
        'heading',
        'paragraph',
        'button_text',
        'link_text',
        'link_href',
    ];
}
