<?php

namespace App\Http\Controllers;
use App\Http\Resources\Ref43Resource;
use App\Models\Ref_43;
use Illuminate\Http\Request;

class Ref43Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return Ref43Resource::collection(Ref_43::all());
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
     * @param  \App\Models\Ref_43  $ref_43
     * @return \Illuminate\Http\Response
     */
    public function show(Ref_43 $ref_43)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ref_43  $ref_43
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ref_43 $ref_43)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ref_43  $ref_43
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ref_43 $ref_43)
    {
        //
    }
}
