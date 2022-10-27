<?php

namespace App\Http\Controllers;
use App\Http\Resources\Ref39Resource;
use App\Models\Ref_39;
use Illuminate\Http\Request;

class Ref39Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return Ref39Resource::collection(Ref_39::all());
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
     * @param  \App\Models\Ref_39  $ref_39
     * @return \Illuminate\Http\Response
     */
    public function show(Ref_39 $ref_39)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ref_39  $ref_39
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ref_39 $ref_39)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ref_39  $ref_39
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ref_39 $ref_39)
    {
        //
    }
}
