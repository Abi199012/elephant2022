<?php

namespace App\Http\Controllers;
use App\Http\Resources\Ref47Resource;
use App\Models\Ref_47;
use Illuminate\Http\Request;

class Ref47Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return Ref47Resource::collection(Ref_47::all());
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
     * @param  \App\Models\Ref_47  $ref_47
     * @return \Illuminate\Http\Response
     */
    public function show(Ref_47 $ref_47)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ref_47  $ref_47
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ref_47 $ref_47)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ref_47  $ref_47
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ref_47 $ref_47)
    {
        //
    }
}
