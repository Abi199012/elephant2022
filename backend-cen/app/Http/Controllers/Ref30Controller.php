<?php

namespace App\Http\Controllers;
use App\Http\Resources\Ref30Resource;
use App\Models\Ref_30;
use Illuminate\Http\Request;

class Ref30Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return Ref30Resource::collection(Ref_30::all());
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
     * @param  \App\Models\Ref_30  $ref_30
     * @return \Illuminate\Http\Response
     */
    public function show(Ref_30 $ref_30)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ref_30  $ref_30
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ref_30 $ref_30)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ref_30  $ref_30
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ref_30 $ref_30)
    {
        //
    }
}
