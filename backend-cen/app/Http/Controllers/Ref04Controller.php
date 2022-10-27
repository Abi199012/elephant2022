<?php

namespace App\Http\Controllers;
use App\Http\Resources\Ref04Resource;
use App\Models\Ref_04;
use Illuminate\Http\Request;

class Ref04Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return Ref04Resource::collection(Ref_04::all());
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
     * @param  \App\Models\Ref_04  $ref_04
     * @return \Illuminate\Http\Response
     */
    public function show(Ref_04 $ref_04)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ref_04  $ref_04
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ref_04 $ref_04)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ref_04  $ref_04
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ref_04 $ref_04)
    {
        //
    }
}
