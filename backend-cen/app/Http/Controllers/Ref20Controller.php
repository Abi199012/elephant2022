<?php

namespace App\Http\Controllers;
use App\Http\Resources\Ref20Resource;
use App\Models\Ref_20;
use Illuminate\Http\Request;

class Ref20Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return Ref20Resource::collection(Ref_20::all());
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
     * @param  \App\Models\Ref_20  $ref_20
     * @return \Illuminate\Http\Response
     */
    public function show(Ref_20 $ref_20)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ref_20  $ref_20
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ref_20 $ref_20)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ref_20  $ref_20
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ref_20 $ref_20)
    {
        //
    }
}
