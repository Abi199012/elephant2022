<?php

namespace App\Http\Controllers;
use App\Http\Resources\Ref25Resource;
use App\Models\Ref_25;
use Illuminate\Http\Request;

class Ref25Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return Ref25Resource::collection(Ref_25::all());
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
     * @param  \App\Models\Ref_25  $ref_25
     * @return \Illuminate\Http\Response
     */
    public function show(Ref_25 $ref_25)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ref_25  $ref_25
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ref_25 $ref_25)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ref_25  $ref_25
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ref_25 $ref_25)
    {
        //
    }
}
