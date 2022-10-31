<?php

namespace App\Http\Controllers;
use App\Http\Resources\Ad39Resource;
use App\Models\Ad39;
use App\Http\Requests\StoreAd39Request;
use App\Http\Requests\UpdateAd39Request;

class Ad39Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return Ad39Resource::collection(Ad39::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreAd39Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAd39Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ad39  $ad39
     * @return \Illuminate\Http\Response
     */
    public function show(Ad39 $ad39)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAd39Request  $request
     * @param  \App\Models\Ad39  $ad39
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAd39Request $request, Ad39 $ad39)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ad39  $ad39
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ad39 $ad39)
    {
        //
    }
}
