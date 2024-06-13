<?php

namespace App\Http\Controllers;

use App\Models\Hero;
use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    //index function to display landing page
    public function index()
    {
        //get the hero record that is active
        $hero = Hero::where('is_active', 1)->first();
        return view('welcome', compact('hero'));
    }
}
