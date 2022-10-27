<?php

namespace App\Http\Controllers;
use App\Http\Resources\Ref24Resource;
use App\Models\Ref_24;
use Illuminate\Http\Request;

class Ref24Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return Ref24Resource::collection(Ref_24::all());
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
     * @param  \App\Models\Ref_24  $ref_24
     * @return \Illuminate\Http\Response
     */
    public function show(Ref_24 $ref_24)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ref_24  $ref_24
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ref_24 $ref_24)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ref_24  $ref_24
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ref_24 $ref_24)
    {
        //
    }
}
