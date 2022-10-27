<?php

namespace App\Http\Controllers;
use App\Http\Resources\Ref16Resource;
use App\Models\Ref_16;
use Illuminate\Http\Request;

class Ref16Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return Ref16Resource::collection(Ref_16::all());
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
     * @param  \App\Models\Ref_16  $ref_16
     * @return \Illuminate\Http\Response
     */
    public function show(Ref_16 $ref_16)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ref_16  $ref_16
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ref_16 $ref_16)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ref_16  $ref_16
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ref_16 $ref_16)
    {
        //
    }
}
