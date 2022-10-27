<?php

namespace App\Http\Controllers;
use App\Http\Resources\Ref45Resource;
use App\Models\Ref_45;
use Illuminate\Http\Request;

class Ref45Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return Ref45Resource::collection(Ref_45::all());
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
     * @param  \App\Models\Ref_45  $ref_45
     * @return \Illuminate\Http\Response
     */
    public function show(Ref_45 $ref_45)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ref_45  $ref_45
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ref_45 $ref_45)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ref_45  $ref_45
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ref_45 $ref_45)
    {
        //
    }
}
