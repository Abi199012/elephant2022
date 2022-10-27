<?php

namespace App\Http\Controllers;
use App\Http\Resources\Ref07Resource;
use App\Models\Ref_07;
use Illuminate\Http\Request;

class Ref07Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return Ref07Resource::collection(Ref_07::all());
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
     * @param  \App\Models\Ref_07  $ref_07
     * @return \Illuminate\Http\Response
     */
    public function show(Ref_07 $ref_07)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ref_07  $ref_07
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ref_07 $ref_07)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ref_07  $ref_07
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ref_07 $ref_07)
    {
        //
    }
}
