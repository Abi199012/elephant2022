<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\A01;
use App\Models\FamilyId;
use App\Models\PersonalId;
use App\Models\Country;
use App\Helpers\Helper;
use App\Http\Resources\CountryResource;
use DB;

class TestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data1 = FamilyId::all();
        $dataarr = array();
        $family_id = Helper::IDGenerator(new FamilyId,'family_id',8,'FID');
        array_push($dataarr, json_encode($data1));



        $data2 = PersonalId::all();
        $persoanl_id = Helper::IDGeneratorforPid(new PersonalId,'personal_id',9,'PID');
        // $country = Country::with('states')->get();
        $country = CountryResource::collection(Country::all());
        array_push($dataarr,json_encode($data2));

        // return ($family_id.''.$persoanl_id);
        return ($family_id);
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
