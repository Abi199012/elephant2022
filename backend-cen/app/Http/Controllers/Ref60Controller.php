<?php

namespace App\Http\Controllers;
use App\Http\Resources\Ref60Resource;
use App\Models\Ref_60;
use Illuminate\Http\Request;

class Ref60Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return Ref60Resource::collection(Ref_60::all());
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
     * @param  \App\Models\Ref_60  $ref_60
     * @return \Illuminate\Http\Response
     */
    public function show(Ref_60 $ref_60)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ref_60  $ref_60
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ref_60 $ref_60)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ref_60  $ref_60
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ref_60 $ref_60)
    {
        //
    }
}
