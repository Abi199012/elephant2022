<?php

namespace App\Http\Controllers;
use App\Http\Resources\Ref05Resource;
use App\Models\Ref_05;
use Illuminate\Http\Request;

class Ref05Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return Ref05Resource::collection(Ref_05::all());
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
     * @param  \App\Models\Ref_05  $ref_05
     * @return \Illuminate\Http\Response
     */
    public function show(Ref_05 $ref_05)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ref_05  $ref_05
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ref_05 $ref_05)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ref_05  $ref_05
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ref_05 $ref_05)
    {
        //
    }
}
