<?php

namespace App\Http\Controllers;
use App\Http\Resources\Ref17Resource;
use App\Models\Ref_17;
use Illuminate\Http\Request;

class Ref17Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return Ref17Resource::collection(Ref_17::all());
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
     * @param  \App\Models\Ref_17  $ref_17
     * @return \Illuminate\Http\Response
     */
    public function show(Ref_17 $ref_17)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ref_17  $ref_17
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ref_17 $ref_17)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ref_17  $ref_17
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ref_17 $ref_17)
    {
        //
    }
}
