<?php

namespace App\Http\Controllers;
use App\Http\Resources\Ref53Resource;
use App\Models\Ref_53;
use Illuminate\Http\Request;

class Ref53Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return Ref53Resource::collection(Ref_53::all());
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
     * @param  \App\Models\Ref_53  $ref_53
     * @return \Illuminate\Http\Response
     */
    public function show(Ref_53 $ref_53)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ref_53  $ref_53
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ref_53 $ref_53)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ref_53  $ref_53
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ref_53 $ref_53)
    {
        //
    }
}
