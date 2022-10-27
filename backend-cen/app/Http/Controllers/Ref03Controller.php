<?php

namespace App\Http\Controllers;
use App\Http\Resources\Ref03Resource;
use App\Models\Ref_03;
use Illuminate\Http\Request;

class Ref03Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return Ref03Resource::collection(Ref_03::all());
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
     * @param  \App\Models\Ref_03  $ref_03
     * @return \Illuminate\Http\Response
     */
    public function show(Ref_03 $ref_03)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ref_03  $ref_03
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ref_03 $ref_03)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ref_03  $ref_03
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ref_03 $ref_03)
    {
        //
    }
}
