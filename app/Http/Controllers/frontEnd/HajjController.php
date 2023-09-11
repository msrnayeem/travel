<?php

namespace App\Http\Controllers\frontEnd;
use App\Http\Controllers\Controller;

use App\Models\Hajj;
use App\Http\Requests\StoreHajjRequest;
use App\Http\Requests\UpdateHajjRequest;

class HajjController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('frontend.pages.hajj');
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
    public function store(StoreHajjRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Hajj $hajj)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Hajj $hajj)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateHajjRequest $request, Hajj $hajj)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Hajj $hajj)
    {
        //
    }
}
