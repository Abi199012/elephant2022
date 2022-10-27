<?php

namespace App\Http\Controllers;
use App\Http\Resources\Ref56Resource;
use App\Models\Ref_56;
use Illuminate\Http\Request;

class Ref56Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return Ref56Resource::collection(Ref_56::all());
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
     * @param  \App\Models\Ref_56  $ref_56
     * @return \Illuminate\Http\Response
     */
    public function show(Ref_56 $ref_56)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ref_56  $ref_56
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ref_56 $ref_56)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ref_56  $ref_56
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ref_56 $ref_56)
    {
        //
    }
}
