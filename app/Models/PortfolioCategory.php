<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PortfolioCategory extends Model
{
    use HasFactory;

    //add fillable
    protected $fillable = [
        'name',
        'description'
    ];

    //add relationship to Portfolio
    public function portfolios()
    {
        return $this->hasMany(Portfolio::class);
    }
}
