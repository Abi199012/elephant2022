<?php

namespace App\Http\Controllers;
use App\Http\Resources\Ad41Resource;
use App\Models\Ad41;
use App\Http\Requests\StoreAd41Request;
use App\Http\Requests\UpdateAd41Request;

class Ad41Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return Ad41Resource::collection(Ad41::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreAd41Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAd41Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ad41  $ad41
     * @return \Illuminate\Http\Response
     */
    public function show(Ad41 $ad41)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAd41Request  $request
     * @param  \App\Models\Ad41  $ad41
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAd41Request $request, Ad41 $ad41)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ad41  $ad41
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ad41 $ad41)
    {
        //
    }
}
