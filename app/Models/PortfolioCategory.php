<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PortfolioCategory extends Model
{
    use HasFactory;
    //generate fillable array
    protected $fillable = ['name', 'slug'];

    //create relationship to Portfolio
    public function portfolios()
    {
        return $this->hasMany(Portfolio::class);
    }
}
