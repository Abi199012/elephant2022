<?php

namespace App\Http\Controllers;
use App\Http\Resources\Ref15Resource;
use App\Models\Ref_15;
use Illuminate\Http\Request;

class Ref15Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return Ref15Resource::collection(Ref_15::all());
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
     * @param  \App\Models\Ref_15  $ref_15
     * @return \Illuminate\Http\Response
     */
    public function show(Ref_15 $ref_15)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ref_15  $ref_15
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ref_15 $ref_15)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ref_15  $ref_15
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ref_15 $ref_15)
    {
        //
    }
}
