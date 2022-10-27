<?php

namespace App\Http\Controllers;
use App\Http\Resources\Ref51Resource;
use App\Models\Ref_51;
use Illuminate\Http\Request;

class Ref51Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return Ref51Resource::collection(Ref_51::all());
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
     * @param  \App\Models\Ref_51  $ref_51
     * @return \Illuminate\Http\Response
     */
    public function show(Ref_51 $ref_51)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ref_51  $ref_51
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ref_51 $ref_51)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ref_51  $ref_51
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ref_51 $ref_51)
    {
        //
    }
}
