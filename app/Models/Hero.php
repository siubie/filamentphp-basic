<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hero extends Model
{
    use HasFactory;
    //generate fillable for hero
    protected $fillable = [
        'image',
        'title',
        'subtitle',
        'link_one',
        'link_two',
        'is_active',
    ];
}
