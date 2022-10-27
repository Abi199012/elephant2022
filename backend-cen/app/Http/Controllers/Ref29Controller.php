<?php

namespace App\Http\Controllers;
use App\Http\Resources\Ref29Resource;
use App\Models\Ref_29;
use Illuminate\Http\Request;

class Ref29Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return Ref29Resource::collection(Ref_29::all());
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
     * @param  \App\Models\Ref_29  $ref_29
     * @return \Illuminate\Http\Response
     */
    public function show(Ref_29 $ref_29)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ref_29  $ref_29
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ref_29 $ref_29)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ref_29  $ref_29
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ref_29 $ref_29)
    {
        //
    }
}
