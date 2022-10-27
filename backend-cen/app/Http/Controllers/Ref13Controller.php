<?php

namespace App\Http\Controllers;
use App\Http\Resources\Ref13Resource;
use App\Models\Ref_13;
use Illuminate\Http\Request;

class Ref13Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return Ref13Resource::collection(Ref_13::all());
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
     * @param  \App\Models\Ref_13  $ref_13
     * @return \Illuminate\Http\Response
     */
    public function show(Ref_13 $ref_13)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ref_13  $ref_13
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ref_13 $ref_13)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ref_13  $ref_13
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ref_13 $ref_13)
    {
        //
    }
}
