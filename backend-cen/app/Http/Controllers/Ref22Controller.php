<?php

namespace App\Http\Controllers;
use App\Http\Resources\Ref22Resource;
use App\Models\Ref_22;
use Illuminate\Http\Request;

class Ref22Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return Ref22Resource::collection(Ref_22::all());
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
     * @param  \App\Models\Ref_22  $ref_22
     * @return \Illuminate\Http\Response
     */
    public function show(Ref_22 $ref_22)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ref_22  $ref_22
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ref_22 $ref_22)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ref_22  $ref_22
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ref_22 $ref_22)
    {
        //
    }
}
