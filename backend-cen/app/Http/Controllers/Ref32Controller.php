<?php

namespace App\Http\Controllers;
use App\Http\Resources\Ref32Resource;
use App\Models\Ref_32;
use Illuminate\Http\Request;

class Ref32Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return Ref32Resource::collection(Ref_32::all());
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
     * @param  \App\Models\Ref_32  $ref_32
     * @return \Illuminate\Http\Response
     */
    public function show(Ref_32 $ref_32)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ref_32  $ref_32
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ref_32 $ref_32)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ref_32  $ref_32
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ref_32 $ref_32)
    {
        //
    }
}
