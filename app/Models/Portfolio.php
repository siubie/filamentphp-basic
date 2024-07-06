<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    use HasFactory;

    //create fillable
    protected $fillable = ['title', 'description', 'image', 'category_id'];

    //create relationship to PortfolioCategory
    public function category()
    {
        return $this->belongsTo(PortfolioCategory::class);
    }
}
