<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Enumerator;
class CheckEnumController extends Controller
{
    //

    public function checkenum(Request $enumname){

      $state = "";

        $username = $enumname['user_name'];

        $usernameDetails = Enumerator::where('user_name', '=', $username)->first();

        // return $enumname['user_name'];
        if ($usernameDetails === null) {
            // $state = "false";
            $data['status'] = false;

            return $data;
         } else {
            // $state = true;

            // $enumalldata = Enumerator::where('user_name','=',$username)->get();
            $data =array();
            $data['status'] =true;
            $data['data'] = Enumerator::where('user_name','=',$username)->get();
            // array_push($data,$enumalldata);

            return $data;
        }




    }


}
