<?php

namespace App\Http\Controllers;
use App\Http\Resources\Ref66Resource;
use App\Models\Ref_66;
use Illuminate\Http\Request;

class Ref66Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return Ref66Resource::collection(Ref_66::all());
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
     * @param  \App\Models\Ref_66  $ref_66
     * @return \Illuminate\Http\Response
     */
    public function show(Ref_66 $ref_66)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ref_66  $ref_66
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ref_66 $ref_66)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ref_66  $ref_66
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ref_66 $ref_66)
    {
        //
    }
}
