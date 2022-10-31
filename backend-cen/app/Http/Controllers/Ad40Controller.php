<?php

namespace App\Http\Controllers;
use App\Http\Resources\Ad40Resource;
use App\Models\Ad40;
use App\Http\Requests\StoreAd40Request;
use App\Http\Requests\UpdateAd40Request;

class Ad40Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return Ad40Resource::collection(Ad40::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreAd40Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAd40Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ad40  $ad40
     * @return \Illuminate\Http\Response
     */
    public function show(Ad40 $ad40)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAd40Request  $request
     * @param  \App\Models\Ad40  $ad40
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAd40Request $request, Ad40 $ad40)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ad40  $ad40
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ad40 $ad40)
    {
        //
    }
}
