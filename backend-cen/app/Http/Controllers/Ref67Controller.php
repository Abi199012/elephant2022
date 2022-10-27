<?php

namespace App\Http\Controllers;
use App\Http\Resources\Ref67Resource;
use App\Models\Ref_67;
use Illuminate\Http\Request;

class Ref67Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return Ref67Resource::collection(Ref_67::all());
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
     * @param  \App\Models\Ref_67  $ref_67
     * @return \Illuminate\Http\Response
     */
    public function show(Ref_67 $ref_67)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ref_67  $ref_67
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ref_67 $ref_67)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ref_67  $ref_67
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ref_67 $ref_67)
    {
        //
    }
}
