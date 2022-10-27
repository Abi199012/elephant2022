<?php

namespace App\Http\Controllers;
use App\Http\Resources\Ref10Resource;
use App\Models\Ref_10;
use Illuminate\Http\Request;

class Ref10Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return Ref10Resource::collection(Ref_10::all());
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
     * @param  \App\Models\Ref_10  $ref_10
     * @return \Illuminate\Http\Response
     */
    public function show(Ref_10 $ref_10)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ref_10  $ref_10
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ref_10 $ref_10)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ref_10  $ref_10
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ref_10 $ref_10)
    {
        //
    }
}
