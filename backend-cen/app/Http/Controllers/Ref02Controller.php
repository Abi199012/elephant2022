<?php

namespace App\Http\Controllers;
use App\Http\Resources\Ref02Resource;
use App\Models\Ref_02;
use Illuminate\Http\Request;

class Ref02Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return Ref02Resource::collection(Ref_02::all());
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
     * @param  \App\Models\Ref_02  $ref_02
     * @return \Illuminate\Http\Response
     */
    public function show(Ref_02 $ref_02)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ref_02  $ref_02
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ref_02 $ref_02)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ref_02  $ref_02
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ref_02 $ref_02)
    {
        //
    }
}
