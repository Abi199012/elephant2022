<?php

namespace App\Http\Controllers;
use App\Http\Resources\Ref34Resource;
use App\Models\Ref_34;
use Illuminate\Http\Request;

class Ref34Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return Ref34Resource::collection(Ref_34::all());
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
     * @param  \App\Models\Ref_34  $ref_34
     * @return \Illuminate\Http\Response
     */
    public function show(Ref_34 $ref_34)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ref_34  $ref_34
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ref_34 $ref_34)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ref_34  $ref_34
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ref_34 $ref_34)
    {
        //
    }
}
