<?php

namespace App\Http\Controllers;
use App\Http\Resources\Ref23Resource;
use App\Models\Ref_23;
use Illuminate\Http\Request;

class Ref23Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return Ref23Resource::collection(Ref_23::all());
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
     * @param  \App\Models\Ref_23  $ref_23
     * @return \Illuminate\Http\Response
     */
    public function show(Ref_23 $ref_23)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ref_23  $ref_23
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ref_23 $ref_23)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ref_23  $ref_23
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ref_23 $ref_23)
    {
        //
    }
}
