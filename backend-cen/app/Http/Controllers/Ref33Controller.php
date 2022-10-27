<?php

namespace App\Http\Controllers;
use App\Http\Resources\Ref33Resource;
use App\Models\Ref_33;
use Illuminate\Http\Request;

class Ref33Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return Ref33Resource::collection(Ref_33::all());
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
     * @param  \App\Models\Ref_33  $ref_33
     * @return \Illuminate\Http\Response
     */
    public function show(Ref_33 $ref_33)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ref_33  $ref_33
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ref_33 $ref_33)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ref_33  $ref_33
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ref_33 $ref_33)
    {
        //
    }
}
