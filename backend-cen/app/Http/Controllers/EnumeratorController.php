<?php

namespace App\Http\Controllers;
use App\Http\Resources\EnumeratorResource;
use App\Models\Enumerator;
use App\Http\Requests\StoreEnumeratorRequest;
use App\Http\Requests\UpdateEnumeratorRequest;
use Symfony\Component\HttpKernel\Exception\HttpException;

class EnumeratorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return EnumeratorResource::collection(Enumerator::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreEnumeratorRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreEnumeratorRequest $request)
    {
        //
        try {

            $data = new Enumerator;
            $data->fill($request->validated())->save();

            return new EnumeratorResource($data);

        } catch(\Exception $exception) {
            throw new HttpException(400, "Invalid data -");
            return "dddddd";
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Enumerator  $enumerator
     * @return \Illuminate\Http\Response
     */
    public function show($enumerator)
    {
        //
        // $data = Enumerator::findorfail($enumerator);
        // return EnumeratorResource::collection($data);
         // get the shark
    

        return new EnumeratorResource(Enumerator::findorfail($enumerator));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateEnumeratorRequest  $request
     * @param  \App\Models\Enumerator  $enumerator
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateEnumeratorRequest $request, $id)
    {
        //

        // return $id;
        
        if (!$id) {
            # code...
            throw new HttpException(400,"Invalid id");
        }
        try {
            $data = Enumerator::find($id);
            $data->fill($request->validated())->save();
            return new EnumeratorResource($data);
        } catch (\Exception $exception) {
            throw new HttpException(400,"Invalide Date -{$exception->getMessage}");
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Enumerator  $enumerator
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //

        $data = Enumerator::find($id);
        $data ->delete();
        return ('Deleted Succesfully');
    }
}
