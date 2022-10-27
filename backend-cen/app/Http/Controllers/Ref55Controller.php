<?php

namespace App\Http\Controllers;
use App\Http\Resources\Ref55Resource;
use App\Models\Ref_55;
use Illuminate\Http\Request;

class Ref55Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return Ref55Resource::collection(Ref_55::all());
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
     * @param  \App\Models\Ref_55  $ref_55
     * @return \Illuminate\Http\Response
     */
    public function show(Ref_55 $ref_55)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ref_55  $ref_55
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ref_55 $ref_55)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ref_55  $ref_55
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ref_55 $ref_55)
    {
        //
    }
}
