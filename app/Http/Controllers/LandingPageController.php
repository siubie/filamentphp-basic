<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    //
    public function index()
    {
        //get one hero that is active
        $hero = \App\Models\Hero::where('is_active', true)->first();
        [$mainTitle, $animationTitle] = explode('#', $hero->title);
        $animationTitle = explode('|', $animationTitle);

        //get all services order by ascending
        $services = \App\Models\Service::orderBy('position', 'asc')->get();



        return view('welcome', compact('hero', 'mainTitle', 'animationTitle', 'services'));
    }
}
