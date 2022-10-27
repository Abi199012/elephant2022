<?php

namespace App\Http\Controllers;
use App\Http\Resources\Ref31Resource;
use App\Models\Ref_31;
use Illuminate\Http\Request;

class Ref31Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return Ref31Resource::collection(Ref_31::all());
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
     * @param  \App\Models\Ref_31  $ref_31
     * @return \Illuminate\Http\Response
     */
    public function show(Ref_31 $ref_31)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ref_31  $ref_31
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ref_31 $ref_31)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ref_31  $ref_31
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ref_31 $ref_31)
    {
        //
    }
}
