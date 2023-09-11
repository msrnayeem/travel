<?php

namespace App\Http\Controllers\frontEnd;

use App\Http\Controllers\Controller;
use App\Models\Umrah;
use App\Http\Requests\StoreUmrahRequest;
use App\Http\Requests\UpdateUmrahRequest;

class UmrahController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('frontend.pages.umrah');
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
    public function store(StoreUmrahRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Umrah $umrah)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Umrah $umrah)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateUmrahRequest $request, Umrah $umrah)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Umrah $umrah)
    {
        //
    }
}
