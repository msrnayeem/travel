<?php

namespace App\Http\Controllers\frontEnd;
use App\Http\Controllers\Controller;

use App\Models\HomeCarousel;
use App\Http\Requests\StoreHomeCarouselRequest;
use App\Http\Requests\UpdateHomeCarouselRequest;

class HomeCarouselController extends Controller
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
    public function store(StoreHomeCarouselRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(HomeCarousel $homeCarousel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(HomeCarousel $homeCarousel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateHomeCarouselRequest $request, HomeCarousel $homeCarousel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(HomeCarousel $homeCarousel)
    {
        //
    }
}
