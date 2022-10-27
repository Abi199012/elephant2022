<?php

namespace App\Http\Controllers;
use App\Http\Resources\Ref35Resource;
use App\Models\Ref_35;
use Illuminate\Http\Request;

class Ref35Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return Ref35Resource::collection(Ref_35::all());
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
     * @param  \App\Models\Ref_35  $ref_35
     * @return \Illuminate\Http\Response
     */
    public function show(Ref_35 $ref_35)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ref_35  $ref_35
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ref_35 $ref_35)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ref_35  $ref_35
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ref_35 $ref_35)
    {
        //
    }
}
