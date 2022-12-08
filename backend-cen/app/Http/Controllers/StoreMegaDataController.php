<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\Ssnrequest;
use App\Http\Resources\SsnResource;
use App\Http\Resources\FamilyIdResource;
use App\Models\Ssn;
use App\Models\A01;
use App\Models\FamilyId;
use App\Models\PersonalId;
use App\Models\Country;
use App\Helpers\Helper;
use App\Http\Resources\CountryResource;
use App\Models\Family;
use Illuminate\Support\Facades\DB;
use JetBrains\PhpStorm\Language;
use Illuminate\Support\Facades\Storage;


class StoreMegaDataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return FamilyIdResource::collection(FamilyId::get());
        // return "this is from index";
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

        $name ="abel";

        Storage::disk('public')->put('dataset.txt',json_encode($request['p1Data']));

        return $request;

        
    }



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show( $id)
    {
        //
        // return view('user.profile', [
        //     'user' => User::findOrFail($id)
        // ]);



        // $users = DB::table('family_ids')->where('family_id',[$fId])->get();
        // $family = FamilyId::whereIn('family_id', [$fId])->get()();
        return  FamilyIdResource::collection(FamilyId::where('family_id', $id)->get());
    //    return new FamilyIdResource(FamilyId::where('family_id', $family_id)->get());
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
