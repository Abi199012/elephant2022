<?php

namespace App\Http\Controllers;
use App\Http\Resources\Ref01Resource;
use App\Http\Resources\testprac;

use App\Models\Ref_01;
use Illuminate\Http\Request;

class Ref01Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return testprac::collection(Ref_01::all());
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
     * @param  \App\Models\Ref_01  $ref_01
     * @return \Illuminate\Http\Response
     */
    public function show(Ref_01 $ref_01)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ref_01  $ref_01
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ref_01 $ref_01)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ref_01  $ref_01
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ref_01 $ref_01)
    {
        //
    }
}
