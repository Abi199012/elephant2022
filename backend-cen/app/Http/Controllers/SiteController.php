<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SiteController extends Controller
{
    //

    public function checkConnection()
    {
        $connection = DB::connection()->getDatabaseName();

        if ($connection) {

            $database = DB::connection()->getDatabaseName();
            
            return 'connected successfully';
            // dd("Connected successfully to database " . $database . ".");
        }
    }
}
