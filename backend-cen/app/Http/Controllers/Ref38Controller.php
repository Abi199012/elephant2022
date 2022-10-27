<?php

namespace App\Http\Controllers;
use App\Http\Resources\Ref38Resource;
use App\Models\Ref_38;
use Illuminate\Http\Request;

class Ref38Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return Ref38Resource::collection(Ref_38::all());
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
     * @param  \App\Models\Ref_38  $ref_38
     * @return \Illuminate\Http\Response
     */
    public function show(Ref_38 $ref_38)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ref_38  $ref_38
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ref_38 $ref_38)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ref_38  $ref_38
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ref_38 $ref_38)
    {
        //
    }
}
