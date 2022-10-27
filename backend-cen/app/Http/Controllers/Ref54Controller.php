<?php

namespace App\Http\Controllers;
use App\Http\Resources\Ref54Resource;
use App\Models\Ref_54;
use Illuminate\Http\Request;

class Ref54Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return Ref54Resource::collection(Ref_54::all());
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
     * @param  \App\Models\Ref_54  $ref_54
     * @return \Illuminate\Http\Response
     */
    public function show(Ref_54 $ref_54)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ref_54  $ref_54
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ref_54 $ref_54)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ref_54  $ref_54
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ref_54 $ref_54)
    {
        //
    }
}
