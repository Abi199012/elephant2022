<?php

namespace App\Http\Controllers;
use App\Http\Resources\Ref64Resource;
use App\Models\Ref_64;
use Illuminate\Http\Request;

class Ref64Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return Ref64Resource::collection(Ref_64::all());
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
     * @param  \App\Models\Ref_64  $ref_64
     * @return \Illuminate\Http\Response
     */
    public function show(Ref_64 $ref_64)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ref_64  $ref_64
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ref_64 $ref_64)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ref_64  $ref_64
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ref_64 $ref_64)
    {
        //
    }
}
