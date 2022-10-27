<?php

namespace App\Http\Controllers;
use App\Http\Resources\Ref06Resource;
use App\Models\Ref_06;
use Illuminate\Http\Request;

class Ref06Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return Ref06Resource::collection(Ref_06::all());
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
        try {

            $data = new Ref_06;
            $data->fill($request->validated())->save();

            return new Ref06Resource($data);

        } catch(\Exception $exception) {
            throw new HttpException(400, "Invalid data - {$exception->getMessage}");
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ref_06  $ref_06
     * @return \Illuminate\Http\Response
     */
    public function show($ref_06)
    {
        //
        $data = Ref_06::findorfail($ref_06);
        return new Ref06Resource($data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ref_06  $ref_06
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //

        if (!$id) {
            # code...
            throw new HttpException(400,"Invalid id");
        }
        try {
            $data = Ref_06::find($id);
            $data->fill($request->validated())->save();
            return new Ref06Resource($data);
        } catch (\Exception $exception) {
            throw new HttpException(400,"Invalide Date -{$exception->getMessage}");
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ref_06  $ref_06
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $data = Ref_06::findorfail($id);
        $data ->delete();
        return ('Deleted Succesfully');
    }
}
