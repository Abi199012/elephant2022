<?php

namespace App\Http\Controllers;
use App\Http\Resources\Ad42Resource;
use App\Models\Ad42;
use App\Http\Requests\StoreAd42Request;
use App\Http\Requests\UpdateAd42Request;

class Ad42Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return Ad42Resource::collection(Ad42::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreAd42Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAd42Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ad42  $ad42
     * @return \Illuminate\Http\Response
     */
    public function show(Ad42 $ad42)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAd42Request  $request
     * @param  \App\Models\Ad42  $ad42
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAd42Request $request, Ad42 $ad42)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ad42  $ad42
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ad42 $ad42)
    {
        //
    }
}
