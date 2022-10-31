<?php

namespace App\Http\Controllers;
use App\Http\Resources\Ad47Resource;
use App\Models\Ad47;
use App\Http\Requests\StoreAd47Request;
use App\Http\Requests\UpdateAd47Request;

class Ad47Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return Ad47Resource::collection(Ad47::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreAd47Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAd47Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ad47  $ad47
     * @return \Illuminate\Http\Response
     */
    public function show(Ad47 $ad47)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAd47Request  $request
     * @param  \App\Models\Ad47  $ad47
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAd47Request $request, Ad47 $ad47)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ad47  $ad47
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ad47 $ad47)
    {
        //
    }
}
