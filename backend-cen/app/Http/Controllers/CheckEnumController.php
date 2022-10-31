<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Enumerator;
class CheckEnumController extends Controller
{
    //

    public function checkenum(Request $enumname){

        $username = $enumname['user_name'];
     
        $usernameDetails = Enumerator::where('user_name', '=', $username)->first();

        if ($usernameDetails === null) {

            return "not registerd";
         } else {
            $enumalldata = Enumerator::where('user_name','=',$username)->get();
            return $enumalldata;
        }
     

        

    }
}
