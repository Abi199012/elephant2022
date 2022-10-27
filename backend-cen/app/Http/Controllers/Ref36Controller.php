<?php

namespace App\Http\Controllers;
use App\Http\Resources\Ref36Resource;
use App\Models\Ref_36;
use Illuminate\Http\Request;

class Ref36Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return Ref36Resource::collection(Ref_36::all());
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
     * @param  \App\Models\Ref_36  $ref_36
     * @return \Illuminate\Http\Response
     */
    public function show(Ref_36 $ref_36)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ref_36  $ref_36
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ref_36 $ref_36)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ref_36  $ref_36
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ref_36 $ref_36)
    {
        //
    }
}
