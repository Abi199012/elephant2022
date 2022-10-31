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

        return $enumname['user_name'];
        // if ($usernameDetails === null) {

        //     return "this is ur data" .$enumname;
        //  } else {
        //     $enumalldata = Enumerator::where('user_name','=',$username)->get();
        //     return $enumalldata;
        // }
     

        

    }
}
