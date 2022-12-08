<?php

namespace App\Http\Controllers;
use App\Http\Resources\Ad53Resource;
use App\Http\Requests\StoreAd53Request;
use App\Http\Requests\UpdateAd53Request;
use App\Models\Ad53;

class Ad53Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return Ad53Resource::collection(Ad53::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreAd53Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAd53Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ad53  $ad53
     * @return \Illuminate\Http\Response
     */
    public function show(Ad53 $ad53)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAd53Request  $request
     * @param  \App\Models\Ad53  $ad53
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAd53Request $request, Ad53 $ad53)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ad53  $ad53
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ad53 $ad53)
    {
        //
    }
}
