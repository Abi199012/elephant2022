<?php

namespace App\Http\Controllers;

use App\Http\Resources\Ad44Resource;
use App\Models\Ad44;
use App\Http\Requests\StoreAd44Request;
use App\Http\Requests\UpdateAd44Request;

class Ad44Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return Ad44Resource::collection(Ad44::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreAd44Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAd44Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ad44  $ad44
     * @return \Illuminate\Http\Response
     */
    public function show(Ad44 $ad44)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAd44Request  $request
     * @param  \App\Models\Ad44  $ad44
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAd44Request $request, Ad44 $ad44)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ad44  $ad44
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ad44 $ad44)
    {
        //
    }
}
