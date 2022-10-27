<?php

namespace App\Http\Controllers;
use App\Http\Resources\Ref44Resource;
use App\Models\Ref_44;
use Illuminate\Http\Request;

class Ref44Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return Ref44Resource::collection(Ref_44::all());
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
     * @param  \App\Models\Ref_44  $ref_44
     * @return \Illuminate\Http\Response
     */
    public function show(Ref_44 $ref_44)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ref_44  $ref_44
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ref_44 $ref_44)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ref_44  $ref_44
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ref_44 $ref_44)
    {
        //
    }
}
