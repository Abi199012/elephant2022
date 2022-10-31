<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FamilyTestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        // $family = DB::table('family_ids')->get;
        $dataarr = array();
        $users = DB::table('family_ids')
            ->Join('personal_ids', 'family_ids.family_id', '=', 'personal_ids.family_id')
            ->select('family_ids.*', 'personal_ids.*')
            ->get();


          $family =  DB::table('family_ids')
        ->join('personal_ids',[
            "family_id" => function ($join) {
            $join->on('family_ids.family_id', '=', 'personal_ids.family_id');
        }])
        ->get();

            

            // array_push($dataarr,$family);


        return $family;
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
