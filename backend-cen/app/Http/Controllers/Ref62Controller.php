<?php

namespace App\Http\Controllers;
use App\Http\Resources\Ref62Resource;
use App\Models\Ref_62;
use Illuminate\Http\Request;

class Ref62Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return Ref62Resource::collection(Ref_62::all());
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
     * @param  \App\Models\Ref_62  $ref_62
     * @return \Illuminate\Http\Response
     */
    public function show(Ref_62 $ref_62)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ref_62  $ref_62
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ref_62 $ref_62)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ref_62  $ref_62
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ref_62 $ref_62)
    {
        //
    }
}
