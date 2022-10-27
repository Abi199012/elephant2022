<?php

namespace App\Http\Controllers;
use App\Http\Resources\Ref48Resource;
use App\Models\Ref_48;
use Illuminate\Http\Request;

class Ref48Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return Ref48Resource::collection(Ref_48::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ref_48  $ref_48
     * @return \Illuminate\Http\Response
     */
    public function show(Ref_48 $ref_48)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ref_48  $ref_48
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ref_48 $ref_48)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ref_48  $ref_48
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ref_48 $ref_48)
    {
        //
    }
}
