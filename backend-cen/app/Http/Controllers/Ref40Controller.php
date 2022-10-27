<?php

namespace App\Http\Controllers;
use App\Http\Resources\Ref40Resource;
use App\Models\Ref_40;
use Illuminate\Http\Request;

class Ref40Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return Ref40Resource::collection(Ref_40::all());
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
     * @param  \App\Models\Ref_40  $ref_40
     * @return \Illuminate\Http\Response
     */
    public function show(Ref_40 $ref_40)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ref_40  $ref_40
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ref_40 $ref_40)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ref_40  $ref_40
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ref_40 $ref_40)
    {
        //
    }
}
