<?php

namespace App\Http\Controllers;
use App\Http\Resources\Ref09Resource;
use App\Models\Ref_09;
use Illuminate\Http\Request;

class Ref09Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return Ref09Resource::collection(Ref_09::all());
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
     * @param  \App\Models\Ref_09  $ref_09
     * @return \Illuminate\Http\Response
     */
    public function show(Ref_09 $ref_09)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ref_09  $ref_09
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ref_09 $ref_09)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ref_09  $ref_09
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ref_09 $ref_09)
    {
        //
    }
}
