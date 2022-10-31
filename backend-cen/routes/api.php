<?php

use App\Http\Controllers\FamilyIdController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\SiteController;


use App\Http\Controllers\EnumeratorController;
use App\Http\Controllers\EnumLocationController;


use App\Http\Controllers\StoreMegaDataController;
use App\Http\Controllers\PersonalIdController;
use App\Http\Controllers\SsnDataController;


use App\Http\Controllers\CountryCountroller;

use App\Http\Controllers\Ref01Controller;
use App\Http\Controllers\Ref02Controller;
use App\Http\Controllers\Ref03Controller;
use App\Http\Controllers\Ref04Controller;
use App\Http\Controllers\Ref05Controller;
use App\Http\Controllers\Ref06Controller;
use App\Http\Controllers\Ref07Controller;
use App\Http\Controllers\Ref08Controller;
use App\Http\Controllers\Ref09Controller;
use App\Http\Controllers\Ref10Controller;


use App\Http\Controllers\Ref11Controller;
use App\Http\Controllers\Ref12Controller;
use App\Http\Controllers\Ref13Controller;
use App\Http\Controllers\Ref14Controller;
use App\Http\Controllers\Ref15Controller;
use App\Http\Controllers\Ref16Controller;
use App\Http\Controllers\Ref17Controller;
use App\Http\Controllers\Ref18Controller;
use App\Http\Controllers\Ref19Controller;
use App\Http\Controllers\Ref20Controller;


use App\Http\Controllers\Ref21Controller;
use App\Http\Controllers\Ref22Controller;
use App\Http\Controllers\Ref23Controller;
use App\Http\Controllers\Ref24Controller;
use App\Http\Controllers\Ref25Controller;
use App\Http\Controllers\Ref26Controller;
use App\Http\Controllers\Ref27Controller;
use App\Http\Controllers\Ref28Controller;
use App\Http\Controllers\Ref29Controller;
use App\Http\Controllers\Ref30Controller;

use App\Http\Controllers\Ref31Controller;
use App\Http\Controllers\Ref32Controller;
use App\Http\Controllers\Ref33Controller;
use App\Http\Controllers\Ref34Controller;
use App\Http\Controllers\Ref35Controller;
use App\Http\Controllers\Ref36Controller;
use App\Http\Controllers\Ref37Controller;
use App\Http\Controllers\Ref38Controller;
use App\Http\Controllers\Ref39Controller;
use App\Http\Controllers\Ref40Controller;


use App\Http\Controllers\Ref41Controller;
use App\Http\Controllers\Ref42Controller;
use App\Http\Controllers\Ref43Controller;
use App\Http\Controllers\Ref44Controller;
use App\Http\Controllers\Ref45Controller;
use App\Http\Controllers\Ref46Controller;
use App\Http\Controllers\Ref47Controller;
use App\Http\Controllers\Ref48Controller;
use App\Http\Controllers\Ref49Controller;
use App\Http\Controllers\Ref50Controller;


use App\Http\Controllers\Ref51Controller;
use App\Http\Controllers\Ref52Controller;
use App\Http\Controllers\Ref53Controller;
use App\Http\Controllers\Ref54Controller;
use App\Http\Controllers\Ref55Controller;
use App\Http\Controllers\Ref56Controller;
use App\Http\Controllers\Ref57Controller;
use App\Http\Controllers\Ref58Controller;
use App\Http\Controllers\Ref59Controller;
use App\Http\Controllers\Ref60Controller;

use App\Http\Controllers\Ref61Controller;
use App\Http\Controllers\Ref62Controller;
use App\Http\Controllers\Ref63Controller;
use App\Http\Controllers\Ref64Controller;
use App\Http\Controllers\Ref65Controller;
use App\Http\Controllers\Ref66Controller;
use App\Http\Controllers\Ref67Controller;

use App\Http\Controllers\SsnController;
use App\Http\Controllers\SsnApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MegadataController;


// Route::group([

//     'middleware' => 'api',
//     'prefix' => 'auth'

// ], function ($router) {

//     Route::post('login', [AuthController::class,'login']);
//     Route::post('signup', [AuthController::class,'signup']);
//     Route::post('logout', [AuthController::class,'logout']);
//     Route::post('refresh', [AuthController::class,'refresh']);
//     Route::post('me', [AuthController::class,'me']);
//     Route::post('profileUpdate', [AuthController::class,'profileUpdate']);
// });





// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });




Route::apiResource('ref01',Ref01Controller::class);
Route::apiResource('ref02',Ref02Controller::class);
Route::apiResource('ref03',Ref03Controller::class);
Route::apiResource('ref04',Ref04Controller::class);
Route::apiResource('ref05',Ref05Controller::class);
Route::apiResource('ref06',Ref06Controller::class);
Route::apiResource('ref07',Ref07Controller::class);
Route::apiResource('ref08',Ref08Controller::class);
Route::apiResource('ref09',Ref09Controller::class);

Route::apiResource('ref10',Ref10Controller::class);
Route::apiResource('ref11',Ref11Controller::class);
Route::apiResource('ref12',Ref12Controller::class);
Route::apiResource('ref13',Ref13Controller::class);
Route::apiResource('ref14',Ref14Controller::class);
Route::apiResource('ref15',Ref15Controller::class);
Route::apiResource('ref16',Ref16Controller::class);
Route::apiResource('ref17',Ref17Controller::class);
Route::apiResource('ref18',Ref18Controller::class);
Route::apiResource('ref19',Ref19Controller::class);

Route::apiResource('ref20',Ref20Controller::class);
Route::apiResource('ref21',Ref21Controller::class);
Route::apiResource('ref22',Ref22Controller::class);
Route::apiResource('ref23',Ref23Controller::class);
Route::apiResource('ref24',Ref24Controller::class);
Route::apiResource('ref25',Ref25Controller::class);
Route::apiResource('ref26',Ref26Controller::class);
Route::apiResource('ref27',Ref27Controller::class);
Route::apiResource('ref28',Ref28Controller::class);
Route::apiResource('ref29',Ref29Controller::class);

Route::apiResource('ref30',Ref30Controller::class);
Route::apiResource('ref31',Ref31Controller::class);
Route::apiResource('ref32',Ref32Controller::class);
Route::apiResource('ref33',Ref33Controller::class);
Route::apiResource('ref34',Ref34Controller::class);
Route::apiResource('ref35',Ref35Controller::class);
Route::apiResource('ref36',Ref36Controller::class);
Route::apiResource('ref37',Ref37Controller::class);
Route::apiResource('ref38',Ref38Controller::class);
Route::apiResource('ref39',Ref39Controller::class);

Route::apiResource('ref40',Ref40Controller::class);
Route::apiResource('ref41',Ref41Controller::class);
Route::apiResource('ref42',Ref42Controller::class);
Route::apiResource('ref43',Ref43Controller::class);
Route::apiResource('ref44',Ref44Controller::class);
Route::apiResource('ref45',Ref45Controller::class);
Route::apiResource('ref46',Ref46Controller::class);
Route::apiResource('ref47',Ref47Controller::class);
Route::apiResource('ref48',Ref48Controller::class);
Route::apiResource('ref49',Ref49Controller::class);

Route::apiResource('ref50',Ref50Controller::class);
Route::apiResource('ref51',Ref51Controller::class);
Route::apiResource('ref52',Ref52Controller::class);
Route::apiResource('ref53',Ref53Controller::class);
Route::apiResource('ref54',Ref54Controller::class);
Route::apiResource('ref55',Ref55Controller::class);
Route::apiResource('ref56',Ref56Controller::class);
Route::apiResource('ref57',Ref57Controller::class);
Route::apiResource('ref58',Ref58Controller::class);
Route::apiResource('ref59',Ref59Controller::class);

Route::apiResource('ref60',Ref60Controller::class);
Route::apiResource('ref61',Ref61Controller::class);
Route::apiResource('ref62',Ref62Controller::class);
Route::apiResource('ref63',Ref63Controller::class);
Route::apiResource('ref64',Ref64Controller::class);
Route::apiResource('ref65',Ref65Controller::class);
Route::apiResource('ref66',Ref66Controller::class);
Route::apiResource('ref67',Ref67Controller::class);



Route::apiResource('country',CountryCountroller::class);

Route::apiResource('familyid',FamilyIdController::class);

Route::apiResource('storemegadata',StoreMegaDataController::class);
Route::apiResource('personaldata',PersonalIdController::class);
Route::apiResource('ssn',SsnDataController::class);

Route::apiResource('megadata', MegadataController::class);

Route::apiResource('enumerators', EnumeratorController::class);

Route::apiResource('enumlocation', EnumLocationController::class);

Route::get('connection', [SiteController::class,'checkConnection']);

Route::get('testapi', [App\Http\Controllers\Ad15Controller::class,'index']);
Route::get('familytest', [App\Http\Controllers\FamilyTestController::class,'index']);
Route::get('check', [App\Http\Controllers\CheckEnumController::class,'checkenum']);











