<?php

namespace App\Http\Controllers;
use App\Http\Resources\Ref26Resource;
use App\Models\Ref_26;
use Illuminate\Http\Request;

class Ref26Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return Ref26Resource::collection(Ref_26::all());
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
     * @param  \App\Models\Ref_26  $ref_26
     * @return \Illuminate\Http\Response
     */
    public function show(Ref_26 $ref_26)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ref_26  $ref_26
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ref_26 $ref_26)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ref_26  $ref_26
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ref_26 $ref_26)
    {
        //
    }
}
