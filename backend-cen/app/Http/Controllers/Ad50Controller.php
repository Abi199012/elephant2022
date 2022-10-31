<?php

namespace App\Http\Controllers;
use App\Http\Resources\Ad50Resource;
use App\Models\Ad50;
use App\Http\Requests\StoreAd50Request;
use App\Http\Requests\UpdateAd50Request;

class Ad50Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return Ad50Resource::collection(Ad50::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreAd50Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAd50Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ad50  $ad50
     * @return \Illuminate\Http\Response
     */
    public function show(Ad50 $ad50)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAd50Request  $request
     * @param  \App\Models\Ad50  $ad50
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAd50Request $request, Ad50 $ad50)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ad50  $ad50
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ad50 $ad50)
    {
        //
    }
}
