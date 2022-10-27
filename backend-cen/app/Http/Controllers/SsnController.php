<?php

namespace App\Http\Controllers;

use App\Http\Requests\Ssnrequest;
use App\Http\Resources\SsnResource;
use App\Models\Ssn;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SsnController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //



        return SsnResource::collection(Ssn::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SsnRequest $request)
    {
        $plus = 0;
        $ssn = 0;
        $newid = DB::table('ssns')
            ->select('serial_id')
            ->where('dob', $request->dob)
            ->orderBy('serial_id', 'DESC')
            ->first();

        if (isset($newid->serial_id)) {
            $plus = $newid->serial_id;
        }

        if ($plus !== 0) {
            $plus = $plus + 1;
        } elseif ($plus == 0) {
            $plus = number_format(0001, 2);
        }

        $data = new Ssn();

        $data->persone_id = $request->persone_id;
        $data->dob = $request->dob;
        $data->serial_id =  sprintf('%04d', $plus);

        $data->save();

        $date = date('d-m-y', strtotime($request->dob));
        $date = str_replace("-", "", $date);





        function generateChecksum($value)
        {
            if (!is_numeric($value)) {
                throw new \InvalidArgumentException(__FUNCTION__ . ' can only accept numeric values.');
            }

            // Force the value to be a string so we can work with it like a string.
            $value = (string) $value;

            // Set some initial values up.
            $length = strlen($value);
            $parity = $length % 2;
            $sum = 0;

            for ($i = $length - 1; $i >= 0; --$i) {
                // Extract a character from the value.
                $char = $value[$i];
                if ($i % 2 != $parity) {
                    $char *= 2;
                    if ($char > 9) {
                        $char -= 9;
                    }
                }
                // Add the character to the sum of characters.
                $sum += $char;
            }

            // Return the value of the sum multiplied by 9 and then modulus 10.
            return ($sum * 9) % 10;
        }
        $ssn =  $date . sprintf('%04d', $plus);
        $checksum = generateChecksum($ssn);

        $wssn = $date . '-' . sprintf('%04d', $plus) . " " . $checksum;



        return ($wssn);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ssn  $Ssn
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Ssn::findorfail($id);
        return new SsnResource($data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ssn  $Ssn
     * @return \Illuminate\Http\Response
     */
    public function update(SsnRequest $request, $id)
    {
        //
        if (!$id) {
            # code...
            throw new HttpException(400, "Invalid id");
        }
        try {
            $data = Ssn::find($id);
            $data->fill($request->validated())->save();
            return new SsnResource($data);
        } catch (\Exception $exception) {
            throw new HttpException(400, "Invalide Data -{$exception->getMessage}");
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ssn  $Ssn
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $data = Ssn::findorfail($id);
        $data->delete();
        return ('Deleted Succesfully');
    }
}
