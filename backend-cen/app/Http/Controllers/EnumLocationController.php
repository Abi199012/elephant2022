<?php

namespace App\Http\Controllers;
use App\Http\Resources\EnumLocationResource;
use App\Models\EnumLocation;
use App\Http\Requests\StoreEnumLocationRequest;
use App\Http\Requests\UpdateEnumLocationRequest;

class EnumLocationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return EnumLocationResource::collection(EnumLocation::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreEnumLocationRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreEnumLocationRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\EnumLocation  $enumLocation
     * @return \Illuminate\Http\Response
     */
    public function show(EnumLocation $enumLocation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateEnumLocationRequest  $request
     * @param  \App\Models\EnumLocation  $enumLocation
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateEnumLocationRequest $request, EnumLocation $enumLocation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\EnumLocation  $enumLocation
     * @return \Illuminate\Http\Response
     */
    public function destroy(EnumLocation $enumLocation)
    {
        //
    }
}
