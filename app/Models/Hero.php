<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hero extends Model
{
    use HasFactory;
    //add fillable property
    protected $fillable = [
        'image',
        'title',
        'subtitle',
        'link1',
        'link2',
        'is_active'
    ];
}
