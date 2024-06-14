<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Portofolio extends Model
{
    use HasFactory;
    //add fillable
    protected $fillable = ['image', 'title', 'subtitle', 'detail'];
}
