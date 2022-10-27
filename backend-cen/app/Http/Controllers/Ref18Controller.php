<?php

namespace App\Http\Controllers;
use App\Http\Resources\Ref18Resource;
use App\Models\Ref_18;
use Illuminate\Http\Request;

class Ref18Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return Ref18Resource::collection(Ref_18::all());
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
     * @param  \App\Models\Ref_18  $ref_18
     * @return \Illuminate\Http\Response
     */
    public function show(Ref_18 $ref_18)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ref_18  $ref_18
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ref_18 $ref_18)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ref_18  $ref_18
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ref_18 $ref_18)
    {
        //
    }
}
