<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    use HasFactory;

    //add fillable
    protected $fillable = [
        'image',
        'title',
        'description',
        'category_id'
    ];

    //add relationship to PortfolioCategory
    public function category()
    {
        return $this->belongsTo(PortfolioCategory::class);
    }
}
