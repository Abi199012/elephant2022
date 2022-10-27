<?php

namespace App\Http\Controllers;
use App\Http\Resources\Ref21Resource;
use App\Models\Ref_21;
use Illuminate\Http\Request;

class Ref21Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return Ref21Resource::collection(Ref_21::all());
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
     * @param  \App\Models\Ref_21  $ref_21
     * @return \Illuminate\Http\Response
     */
    public function show(Ref_21 $ref_21)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ref_21  $ref_21
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ref_21 $ref_21)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ref_21  $ref_21
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ref_21 $ref_21)
    {
        //
    }
}
