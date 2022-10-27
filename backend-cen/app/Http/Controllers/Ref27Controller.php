<?php

namespace App\Http\Controllers;
use App\Http\Resources\Ref27Resource;
use App\Models\Ref_27;
use Illuminate\Http\Request;

class Ref27Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return Ref27Resource::collection(Ref_27::all());
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
     * @param  \App\Models\Ref_27  $ref_27
     * @return \Illuminate\Http\Response
     */
    public function show(Ref_27 $ref_27)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ref_27  $ref_27
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ref_27 $ref_27)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ref_27  $ref_27
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ref_27 $ref_27)
    {
        //
    }
}
