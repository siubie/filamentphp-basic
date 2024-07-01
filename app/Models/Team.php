<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;
    //create fillable
    protected $fillable = [
        'avatar',
        'name',
        'position',
        'twitter',
        'facebook',
        'instagram',
        'linkedin',
    ];
}
