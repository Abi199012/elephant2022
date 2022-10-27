<?php

namespace App\Http\Controllers;
use App\Http\Resources\Ref37Resource;
use App\Models\Ref_37;
use Illuminate\Http\Request;

class Ref37Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return Ref37Resource::collection(Ref_37::all());
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
     * @param  \App\Models\Ref_37  $ref_37
     * @return \Illuminate\Http\Response
     */
    public function show(Ref_37 $ref_37)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ref_37  $ref_37
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ref_37 $ref_37)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ref_37  $ref_37
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ref_37 $ref_37)
    {
        //
    }
}
