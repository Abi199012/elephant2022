<?php

namespace App\Http\Controllers;
use App\Http\Resources\Ref57Resource;
use App\Models\Ref_57;
use Illuminate\Http\Request;

class Ref57Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return Ref57Resource::collection(Ref_57::all());
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
     * @param  \App\Models\Ref_57  $ref_57
     * @return \Illuminate\Http\Response
     */
    public function show(Ref_57 $ref_57)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ref_57  $ref_57
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ref_57 $ref_57)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ref_57  $ref_57
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ref_57 $ref_57)
    {
        //
    }
}
