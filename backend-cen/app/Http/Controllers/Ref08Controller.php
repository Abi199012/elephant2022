<?php

namespace App\Http\Controllers;
use App\Http\Resources\Ref08Resource;
use App\Models\Ref_08;
use Illuminate\Http\Request;

class Ref08Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return Ref08Resource::collection(Ref_08::all());
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
     * @param  \App\Models\Ref_08  $ref_08
     * @return \Illuminate\Http\Response
     */
    public function show(Ref_08 $ref_08)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ref_08  $ref_08
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ref_08 $ref_08)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ref_08  $ref_08
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ref_08 $ref_08)
    {
        //
    }
}
