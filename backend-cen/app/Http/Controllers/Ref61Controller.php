<?php

namespace App\Http\Controllers;
use App\Http\Resources\Ref61Resource;
use App\Models\Ref_61;
use Illuminate\Http\Request;

class Ref61Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return Ref61Resource::collection(Ref_61::all());
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
     * @param  \App\Models\Ref_61  $ref_61
     * @return \Illuminate\Http\Response
     */
    public function show(Ref_61 $ref_61)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ref_61  $ref_61
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ref_61 $ref_61)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ref_61  $ref_61
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ref_61 $ref_61)
    {
        //
    }
}
