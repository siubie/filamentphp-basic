<?php

namespace App\Http\Controllers;

use App\Models\Hero;
use App\Http\Requests\StoreheroRequest;
use App\Http\Requests\UpdateheroRequest;

class HeroController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreheroRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(hero $hero)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(hero $hero)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateheroRequest $request, hero $hero)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(hero $hero)
    {
        //
    }
}
