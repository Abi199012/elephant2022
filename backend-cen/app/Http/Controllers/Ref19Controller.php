<?php

namespace App\Http\Controllers;
use App\Http\Resources\Ref19Resource;
use App\Models\Ref_19;
use Illuminate\Http\Request;

class Ref19Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return Ref19Resource::collection(Ref_19::all());
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
     * @param  \App\Models\Ref_19  $ref_19
     * @return \Illuminate\Http\Response
     */
    public function show(Ref_19 $ref_19)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ref_19  $ref_19
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ref_19 $ref_19)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ref_19  $ref_19
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ref_19 $ref_19)
    {
        //
    }
}
