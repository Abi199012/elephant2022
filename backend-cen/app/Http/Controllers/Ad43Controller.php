<?php

namespace App\Http\Controllers;
use App\Http\Resources\Ad43Resource;
use App\Models\Ad43;
use App\Http\Requests\StoreAd43Request;
use App\Http\Requests\UpdateAd43Request;

class Ad43Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return Ad43Resource::collection(Ad43::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreAd43Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAd43Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ad43  $ad43
     * @return \Illuminate\Http\Response
     */
    public function show(Ad43 $ad43)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAd43Request  $request
     * @param  \App\Models\Ad43  $ad43
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAd43Request $request, Ad43 $ad43)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ad43  $ad43
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ad43 $ad43)
    {
        //
    }
}
