<?php

namespace App\Http\Controllers;
use App\Http\Resources\Ref58Resource;
use App\Models\Ref_58;
use Illuminate\Http\Request;

class Ref58Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return Ref58Resource::collection(Ref_58::all());
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
     * @param  \App\Models\Ref_58  $ref_58
     * @return \Illuminate\Http\Response
     */
    public function show(Ref_58 $ref_58)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ref_58  $ref_58
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ref_58 $ref_58)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ref_58  $ref_58
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ref_58 $ref_58)
    {
        //
    }
}
