<?php

namespace App\Http\Controllers;
use App\Http\Resources\Ad49Resource;
use App\Models\Ad49;
use App\Http\Requests\StoreAd49Request;
use App\Http\Requests\UpdateAd49Request;

class Ad49Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return Ad49Resource::collection(Ad49::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreAd49Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAd49Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ad49  $ad49
     * @return \Illuminate\Http\Response
     */
    public function show(Ad49 $ad49)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAd49Request  $request
     * @param  \App\Models\Ad49  $ad49
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAd49Request $request, Ad49 $ad49)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ad49  $ad49
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ad49 $ad49)
    {
        //
    }
}
