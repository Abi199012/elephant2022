<?php

namespace App\Http\Controllers;
use App\Http\Resources\Ad48Resource;
use App\Models\Ad48;
use App\Http\Requests\StoreAd48Request;
use App\Http\Requests\UpdateAd48Request;

class Ad48Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return Ad48Resource::collection(Ad48::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreAd48Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAd48Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ad48  $ad48
     * @return \Illuminate\Http\Response
     */
    public function show(Ad48 $ad48)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAd48Request  $request
     * @param  \App\Models\Ad48  $ad48
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAd48Request $request, Ad48 $ad48)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ad48  $ad48
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ad48 $ad48)
    {
        //
    }
}
