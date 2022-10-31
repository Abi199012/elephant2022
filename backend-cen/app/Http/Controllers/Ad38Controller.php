<?php

namespace App\Http\Controllers;
use App\Http\Resources\Ad38Resource;

use App\Models\Ad38;
use App\Http\Requests\StoreAd38Request;
use App\Http\Requests\UpdateAd38Request;

class Ad38Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return Ad38Resource::collection(Ad38::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreAd38Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAd38Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ad38  $ad38
     * @return \Illuminate\Http\Response
     */
    public function show(Ad38 $ad38)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAd38Request  $request
     * @param  \App\Models\Ad38  $ad38
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAd38Request $request, Ad38 $ad38)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ad38  $ad38
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ad38 $ad38)
    {
        //
    }
}
