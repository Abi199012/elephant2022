<?php

namespace App\Http\Controllers;
use App\Http\Resources\Ref65Resource;
use App\Models\Ref_65;
use Illuminate\Http\Request;

class Ref65Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return Ref65Resource::collection(Ref_65::all());
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
     * @param  \App\Models\Ref_65  $ref_65
     * @return \Illuminate\Http\Response
     */
    public function show(Ref_65 $ref_65)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ref_65  $ref_65
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ref_65 $ref_65)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ref_65  $ref_65
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ref_65 $ref_65)
    {
        //
    }
}
