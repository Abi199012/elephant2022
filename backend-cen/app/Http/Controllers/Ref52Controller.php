<?php

namespace App\Http\Controllers;
use App\Http\Resources\Ref52Resource;
use App\Models\Ref_52;
use Illuminate\Http\Request;

class Ref52Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return Ref52Resource::collection(Ref_52::all());
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
     * @param  \App\Models\Ref_52  $ref_52
     * @return \Illuminate\Http\Response
     */
    public function show(Ref_52 $ref_52)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ref_52  $ref_52
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ref_52 $ref_52)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ref_52  $ref_52
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ref_52 $ref_52)
    {
        //
    }
}
