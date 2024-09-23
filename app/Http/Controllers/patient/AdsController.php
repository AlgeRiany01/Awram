<?php

namespace App\Http\Controllers\patient;

use App\Models\ads;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreadsRequest;
use App\Http\Requests\UpdateadsRequest;

class AdsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ads = ads::latest()->get();
        return view('patient.ads.index', compact('ads'));
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
    public function store(StoreadsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(ads $ads)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ads $ads)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateadsRequest $request, ads $ads)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ads $ads)
    {
        //
    }
}
