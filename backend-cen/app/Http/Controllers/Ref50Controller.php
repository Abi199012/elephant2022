<?php

namespace App\Http\Controllers;
use App\Http\Resources\Ref50Resource;
use App\Models\Ref_50;
use Illuminate\Http\Request;

class Ref50Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return Ref50Resource::collection(Ref_50::all());
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
     * @param  \App\Models\Ref_50  $ref_50
     * @return \Illuminate\Http\Response
     */
    public function show(Ref_50 $ref_50)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ref_50  $ref_50
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ref_50 $ref_50)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ref_50  $ref_50
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ref_50 $ref_50)
    {
        //
    }
}
