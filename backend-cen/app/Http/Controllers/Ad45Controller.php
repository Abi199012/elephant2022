<?php

namespace App\Http\Controllers;
use App\Http\Resources\Ad45Resource;
use App\Models\Ad45;
use App\Http\Requests\StoreAd45Request;
use App\Http\Requests\UpdateAd45Request;

class Ad45Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return Ad45Resource::collection(Ad45::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreAd45Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAd45Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ad45  $ad45
     * @return \Illuminate\Http\Response
     */
    public function show(Ad45 $ad45)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAd45Request  $request
     * @param  \App\Models\Ad45  $ad45
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAd45Request $request, Ad45 $ad45)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ad45  $ad45
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ad45 $ad45)
    {
        //
    }
}
