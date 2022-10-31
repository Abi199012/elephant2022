<?php

namespace App\Http\Controllers;
use App\Http\Resources\Ad46Resource;
use App\Models\Ad46;
use App\Http\Requests\StoreAd46Request;
use App\Http\Requests\UpdateAd46Request;

class Ad46Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return Ad46Resource::collection(Ad46::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreAd46Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAd46Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ad46  $ad46
     * @return \Illuminate\Http\Response
     */
    public function show(Ad46 $ad46)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAd46Request  $request
     * @param  \App\Models\Ad46  $ad46
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAd46Request $request, Ad46 $ad46)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ad46  $ad46
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ad46 $ad46)
    {
        //
    }
}
