<?php

namespace App\Http\Controllers;
use App\Http\Resources\Ref41Resource;
use App\Models\Ref_41;
use Illuminate\Http\Request;

class Ref41Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return Ref41Resource::collection(Ref_41::all());
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
     * @param  \App\Models\Ref_41  $ref_41
     * @return \Illuminate\Http\Response
     */
    public function show(Ref_41 $ref_41)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ref_41  $ref_41
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ref_41 $ref_41)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ref_41  $ref_41
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ref_41 $ref_41)
    {
        //
    }
}
