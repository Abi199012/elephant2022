<?php

namespace App\Http\Controllers;
use App\Http\Resources\Ref63Resource;
use App\Models\Ref_63;
use Illuminate\Http\Request;

class Ref63Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return Ref63Resource::collection(Ref_63::all());
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
     * @param  \App\Models\Ref_63  $ref_63
     * @return \Illuminate\Http\Response
     */
    public function show(Ref_63 $ref_63)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ref_63  $ref_63
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ref_63 $ref_63)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ref_63  $ref_63
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ref_63 $ref_63)
    {
        //
    }
}
