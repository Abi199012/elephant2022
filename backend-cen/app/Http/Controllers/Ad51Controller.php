<?php

namespace App\Http\Controllers;
use App\Http\Resources\Ad51Resource;
use App\Http\Requests\StoreAd51Request;
use App\Http\Requests\UpdateAd51Request;
use App\Models\Ad51;

class Ad51Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return Ad51Resource::collection(Ad51::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreAd51Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAd51Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ad51  $ad51
     * @return \Illuminate\Http\Response
     */
    public function show(Ad51 $ad51)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAd51Request  $request
     * @param  \App\Models\Ad51  $ad51
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAd51Request $request, Ad51 $ad51)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ad51  $ad51
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ad51 $ad51)
    {
        //
    }
}
