<?php

namespace App\Http\Controllers;
use App\Http\Resources\Ad52Resource;
use App\Http\Requests\StoreAd52Request;
use App\Http\Requests\UpdateAd52Request;
use App\Models\Ad52;

class Ad52Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return Ad52Resource::collection(Ad52::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreAd52Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAd52Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ad52  $ad52
     * @return \Illuminate\Http\Response
     */
    public function show(Ad52 $ad52)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAd52Request  $request
     * @param  \App\Models\Ad52  $ad52
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAd52Request $request, Ad52 $ad52)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ad52  $ad52
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ad52 $ad52)
    {
        //
    }
}
