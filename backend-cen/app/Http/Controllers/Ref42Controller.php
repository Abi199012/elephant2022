<?php

namespace App\Http\Controllers;
use App\Http\Resources\Ref42Resource;
use App\Models\Ref_42;
use Illuminate\Http\Request;

class Ref42Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return Ref42Resource::collection(Ref_42::all());
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
     * @param  \App\Models\Ref_42  $ref_42
     * @return \Illuminate\Http\Response
     */
    public function show(Ref_42 $ref_42)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ref_42  $ref_42
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ref_42 $ref_42)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ref_42  $ref_42
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ref_42 $ref_42)
    {
        //
    }
}
