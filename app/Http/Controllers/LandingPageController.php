<?php

namespace App\Http\Controllers;

use App\Models\Hero;
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
        //get all the services record
        $services = Service::all();
        return view('welcome', compact('hero', 'title', 'animation', 'services'));
    }
}
