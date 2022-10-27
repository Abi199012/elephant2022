<?php

namespace App\Http\Controllers;
use App\Http\Resources\Ref28Resource;
use App\Models\Ref_28;
use Illuminate\Http\Request;

class Ref28Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return Ref28Resource::collection(Ref_28::all());
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
     * @param  \App\Models\Ref_28  $ref_28
     * @return \Illuminate\Http\Response
     */
    public function show(Ref_28 $ref_28)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ref_28  $ref_28
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ref_28 $ref_28)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ref_28  $ref_28
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ref_28 $ref_28)
    {
        //
    }
}
