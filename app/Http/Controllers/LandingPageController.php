<?php

namespace App\Http\Controllers;

use App\Models\Hero;
use App\Models\Portfolio;
use App\Models\Service;
use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    //index function to display landing page
    public function index()
    {
        //get the hero record that is active
        $hero = Hero::where('is_active', 1)->first();
        //split hero title into title and animation
        [$title, $animation] = explode('|', $hero->title);
        //split animation
        $animation = explode('#', $animation);
        //get all the services record order by sort column
        $services = Service::orderBy('sort')->get();
        //get all portfolio with category
        $portfolios = Portfolio::with('category')->inRandomOrder()->limit(10)->get();
        return view('welcome', compact('hero', 'title', 'animation', 'services', 'portfolios'));
    }
}
