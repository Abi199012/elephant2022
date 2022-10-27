<?php

namespace App\Http\Controllers;
use App\Http\Resources\Ref11Resource;
use App\Models\Ref_11;
use Illuminate\Http\Request;

class Ref11Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return Ref11Resource::collection(Ref_11::all());
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
     * @param  \App\Models\Ref_11  $ref_11
     * @return \Illuminate\Http\Response
     */
    public function show(Ref_11 $ref_11)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ref_11  $ref_11
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ref_11 $ref_11)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ref_11  $ref_11
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ref_11 $ref_11)
    {
        //
    }
}
