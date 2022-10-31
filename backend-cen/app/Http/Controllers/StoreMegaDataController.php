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
use Illuminate\Support\Facades\DB;
use JetBrains\PhpStorm\Language;


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

        $p1Datastore  = $request['p1Data']; //
        $p2Datastores = array();
        $p2Datastores = $request['p2Data']; //
        $p3Datastores = $request->input('p3Data'); //
        $p4Datastore =  $request['p4Data']; //
        $p5Datastore =  $request['p5Data']; //
        $p6Datastores = $request['p6Data']; //
        $p7Datastores = $request['p7Data']; //
        $p8Datastores =  $request['p8Data']; //
        $p9Datastores =  $request['p9Data']; //
        // $p10Datastores = array();
        $p10Datastores = $request['p10Data']; //

        $p11Datastore = $request['p11Data']; //
        $p12Datastore = $request['p12Data']; //
        $p13Datastore = $request['p13Data']; //
        $p14Datastore = $request['p14Data']; //
        $p15Datastore = $request['p15Data']; //
        $p16Datastore = $request['p16Data']; //
        $p17Datastore = $request['p17Data']; //
        $p18Datastore = $request['p18Data']; //
        $p19Datastore = $request['p19Data']; //
        $family_id = Helper::IDGenerator(new FamilyId, 'family_id', 8, 'FID');
        // $family_id = Helper::IDGenerator(new A02,'id',5,'FID');

        $p2_index = "";

        //foreach one
        foreach ($p2Datastores as $p2Datastore) {
            //if one
            if ($p2Datastore['ዝምድና_ምስ_ሓላፊ_ስድራ_id'] == 1) {
                DB::table('family_ids')->insertOrIgnore([
                    'family_id' => $family_id,
                    'f_name_head' => $p2Datastore['ስም'],
                    'm_name_head' => $p2Datastore['ስም_ኣቦ'],
                    'l_name_head' => $p2Datastore['ስም_ኣቦሓጎ'],
                ]);

                $area_id = DB::table('ad01s')->insertGetId([
                    'family_id' => $family_id,
                    'ad01002' => $p1Datastore['ዞባ_id'],
                    'ad01003' => $p1Datastore['ንኡስ_ዞባ_id'],
                    'ad01004' => $p1Datastore['ከተማ_id'],
                    'ad01005' => $p1Datastore['ከባቢ_id'],
                    'ad01006' => $p1Datastore['ዓዲ_id'],
                    'ad01007' => $p1Datastore['ቦታ_ምዝገባ_id'],

                ]);

                $area_id_residence_type = DB::table('ad02s')->insertGetId([
                    'family_id' => $family_id,
                    'area_id' => $area_id,
                    'ad02002' => $p1Datastore['ኩነታት_መንበሪ_id'],
                    'ad02003' => $p1Datastore['ቁጽሪ_ቅርጺ_ህንጻ'],
                    'ad02004' => $p1Datastore['ቁጽሪ_ኣሃዱ_መንበሪ'],
                    'ad02005' => $p1Datastore['ቁጽሪ_ስድራቤት'],
                ]);


                DB::table('ad03s')->insertOrIgnore([
                    'residence_id' => $area_id_residence_type,
                    'ad03002' => $p1Datastore['ዚፕ_ኮድ'],
                    'ad03003' => $p1Datastore['ጎደና'],
                    'ad03004' => $p1Datastore['ቁጽሪ_ገዛ'],
                    'ad03005' => $p1Datastore['ቁጽሪ_መለለዪ_ስድራ'],
                    'ad03006' => $p1Datastore['ብዝሒ_ስድራቤት'],

                ]);
               

                foreach ($p4Datastore['መስርሒ_መግቢ_ጸዓት'] as $facilitone) {
                    DB::table('ad41s')->insertOrIgnore([
                        'family_id' => $family_id,
                        'ad41002' => $facilitone['id'],
                    ]);
                }

                foreach ($p4Datastore['ምንጪ_መብራህቲ'] as $facilittwo) {
                    DB::table('ad42s')->insertOrIgnore([
                        'family_id' => $family_id,
                        'ad42002' => $facilittwo['id'],
                    ]);
                }

                foreach ($p4Datastore['ምንጪ_ሓበሬታ'] as $facilitthree) {
                    DB::table('ad43s')->insertOrIgnore([
                        'family_id' => $family_id,
                        'ad43002' => $facilitthree['id'],
                    ]);
                }
                DB::table('ad08s')->insertOrIgnore([
                    'family_id' => $family_id,
                    'residence_id' => $area_id_residence_type,
                    'ad08002' => $p4Datastore['ዓይነት_ገዛ_id'],
                    'ad08003' => $p4Datastore['ቁጽሪ_ክፍልታት'],
                    'ad08004' => $p4Datastore['ናይ_ውልቂ_id'],
                    'ad08005' => $p4Datastore['ክራይ_id'],
                    'ad08006' => $p4Datastore['ወርሓዊ_ክፍሊት'],
                    'ad08007' => $p4Datastore['ባጤራ_id'],
                    'ad08008' => $p4Datastore['ጽሬት_ዝስተ_ማይ'],
                    'ad08009' => $p4Datastore['ካበይ_ትረክብ'],
                    'ad08010' => $p4Datastore['ዓይነት_ዓይኒ_ምድሪ'],
                ]);

//ቀዋምን_ዘይቀዋምን ንብረት
                foreach ($p9Datastores as $p9_data) {
                    DB::table('ad24s')->insertOrIgnore([
                        'family_id' => $family_id,
                        'ad24002' => $p9_data['ቀዋምን_ዘይቀዋምን_id'],
                        'ad24003' => $p9_data['ዓይነት_ንብረት'],
                        'ad24004' => $p9_data['ስም_ዓይነት_ንብረት'],
                        'ad24005' => $p9_data['ብዝሒ'],
                    ]);
                }
//እዛ ስድራቤት እትውንነን ጥሪት ኣለዋ ዶ'፧
                if($p10Datastores['ዋንነት_ጥሪት']){

                    DB::table('ad25s')->insertOrIgnore([
                        'family_id' => $family_id,
                        'ad25002' => $p10Datastores['ዋንነት_ጥሪት'],
                    ]);
                    foreach($p10Datastores['data'] as $p10_data){
                        DB::table('ad26s')->insertOrIgnore([
                            'family_id' => $family_id,
                            'ad26002' => $p10_data['ዓይነት_ጥሪት_id'],
                            'ad26003' => $p10_data['ሓደ_ዓመትን_ትሕቲኡን_ተባ'],
                            'ad26004' => $p10_data['ሓደ_ዓመትን_ትሕቲኡን_ኣን'],
                            'ad26005' => $p10_data['ልዕሊ_ሓደ_ዓመት_ክሳብ_ሰለስተ_ዓመት_ተባ'],
                            'ad26006' => $p10_data['ልዕሊ_ሓደ_ዓመት_ክሳብ_ሰለስተ_ዓመት_ኣን'],
                            'ad26007' => $p10_data['ልዕሊ_ሰለስተ_ዓመት_ተባ'],
                            'ad26008' => $p10_data['ልዕሊ_ሰለስተ_ዓመት_ኣን'],
                            'ad26009' => $p10_data['ካብ_መሸጣ_ጥሪት_ዝተረኽበ_ኣታዊ_ብናቅፋ'],
                            'ad26010' => $p10_data['ባጤራ_id'],
                        ]);

                        DB::table('ad27s')->insertOrIgnore([
                            'family_id' => $family_id,
                            'ad27002' => $p10_data['ዝተሸጠ_መጠን_ጥሪት'],
                            'ad27003' => $p10_data['ካብ_መሸጣ_ጥሪት_ዝተረኽበ_ኣታዊ_ብናቅፋ'],
                            'ad27004' => $p10_data['ኣብ_ካልእ_መዓላ_ዝወዓለ_መጠን'],
                            // 'ad27005' => $p10_data['መጠን_ዝተርኽበ_ምህርቲ'],
                        ]);

                    

                    }
                    
                }

//ውጽኢት_አንስሳ
if($p11Datastore['ውጽኢት_አንስሳ']){

    
    foreach($p11Datastore['data'] as $p11_data){
        DB::table('ad28s')->insertOrIgnore([
            'family_id' => $family_id,
            'ad28002' => $p11_data['ዓይነት_ውጽኢት_እንስሳ_id'],
            'ad28003' => $p11_data['መስፈሪ_መዐቀኒ_መጠን_id'],
            'ad28004' => $p11_data['መጠን_ዝተረኽበ_ምህርቲ'],
            'ad28005' => $p11_data['ዝተሸጠ_መጠን_ምህርቲ'],
            'ad28006' => $p11_data['ኣብ_ሃልኪ_ስድራ_ቤት_ዝወዓለ_መጠን'],
            'ad28007' => $p11_data['ኣብ_ካልእ_መዓላ_ዝወዓለ_መጠን'],
            'ad28008' => $p11_data['ካብ_ዝተሸጠ_ምህርቲ_ዝተረኽበ_ኣታዊ_ብናቕፋ'],
            'ad28009' => $p11_data['ባጤራ_id'],
           
        ]);

    }

}

//እዛ ስድራቤት ኣብ ፍርያት ዘራአቲ ትነጥፍ ዶ፧

if($p12Datastore['ፍርያት_ዘራአቲ']){
    DB::table('ad29s')->insertOrIgnore([
        'family_id' => $family_id,
        'ad29002' => $p12Datastore['ፍርያት_ዘራአቲ'],
    ]);
    foreach($p12Datastore['data'] as $p12_data){
        DB::table('ad30s')->insertOrIgnore([
            'family_id' => $family_id,
            'ad30002' => $p12_data['ዓይነት_ዘራእቲ_id'],
            'ad30003' => $p12_data['መስፈሪ_መዐቀኒ_መጠን_id'],
            'ad30004' => $p12_data['መጠን_ዝተረኽበ_ምህርቲ'],
            'ad30005' => $p12_data['ዝተሸጠ_መጠን_ምህርቲ'],
            'ad30006' => $p12_data['ኣብ_ሃልኪ_ስድራ_ቤት_ዝወዓለ_መጠን'],
            'ad30007' => $p12_data['ኣብ_ካልእ_መዓላ_ዝወዓለ_መጠን'],
            'ad30008' => $p12_data['ካብ_ዝተሸጠ_ምህርቲ_ዝተረኽበ_ኣታዊ_ብናቕፋ'],
            'ad30009' => $p12_data['ባጤራ_id'],
        ]);
    }
}

//ዓሳ

if($p13Datastore['ዓሳ']){
    DB::table('ad45s')->insertOrIgnore([
        'family_id' => $family_id,
        'ad45002' => $p13Datastore['ዓሳ'],
    ]);
    foreach($p13Datastore['data'] as $p13_data){
        DB::table('ad31s')->insertOrIgnore([
            'family_id' => $family_id,
            'ad31002' => $p13_data['ዓይነት_ዓሳ_id'],
            'ad31003' => $p13_data['መስፈሪ_መዐቀኒ_መጠን_id'],
            'ad31004' => $p13_data['መጠን_ዝተረኽበ_ምህርቲ'],
            'ad31005' => $p13_data['ዝተሸጠ_መጠን_ምህርቲ'],
            'ad31006' => $p13_data['ኣብ_ሃልኪ_ስድራ_ቤት_ዝወዓለ_መጠን'],
            'ad31007' => $p13_data['ኣብ_ካልእ_መዓላ_ዝወዓለ_መጠን'],
            'ad31008' => $p13_data['ካብ_ዝተሸጠ_ምህርቲ_ዝተረኽበ_ኣታዊ_ብናቕፋ'],
            'ad31009' => $p13_data['ባጤራ_id'],
        ]);
    }
}

//ኣግራብ

if($p14Datastore['ኣግራብ']){
    DB::table('ad46s')->insertOrIgnore([
        'family_id' => $family_id,
        'ad46002' => $p14Datastore['ኣግራብ'],
    ]);
    foreach($p14Datastore['data'] as $p14_data){
        DB::table('ad32s')->insertOrIgnore([
            'family_id' => $family_id,
            'ad32002' => $p14_data['ዓይነት_ገረብ_id'],
            'ad32003' => $p14_data['መስፈሪ_መዐቀኒ_መጠን_id'],
            'ad32004' => $p14_data['መጠን_ዝተረኽበ_ምህርቲ'],
            'ad32005' => $p14_data['ዝተሸጠ_መጠን_ምህርቲ'],
            'ad32006' => $p14_data['ኣብ_ሃልኪ_ስድራ_ቤት_ዝወዓለ_መጠን'],
            'ad32007' => $p14_data['ኣብ_ካልእ_መዓላ_ዝወዓለ_መጠን'],
            'ad32008' => $p14_data['ካብ_ዝተሸጠ_ምህርቲ_ዝተረኽበ_ኣታዊ_ብናቕፋ'],
            'ad32009' => $p14_data['ባጤራ_id'],
        ]);
    }
}

//ሕርሻዊ_ንጥፈታት

if($p15Datastore['ሕርሻዊ_ንጥፈታት']){
    DB::table('ad47s')->insertOrIgnore([
        'family_id' => $family_id,
        'ad47002' => $p15Datastore['ሕርሻዊ_ንጥፈታት'],
    ]);
    foreach($p15Datastore['data'] as $p15_data){
        DB::table('ad33s')->insertOrIgnore([
            'family_id' => $family_id,
            'ad33002' => $p15_data['ዓይነት_ሕርሻዊ_id'],
            'ad33003' => $p15_data['ኣብ_ውሽጢ_6_ወርሒ'],
            'ad33004' => $p15_data['ኣብ_ውሽጢ_12_ወርሒ'],
            'ad33005' => $p15_data['ባጤራ_id'],
    
        ]);
    }
}


//ዘይሕርሻዊ_ንጥፈታት
if($p16Datastore['ዘይሕርሻዊ_ንጥፈታት']){
    DB::table('ad48s')->insertOrIgnore([
        'family_id' => $family_id,
        'ad48002' => $p16Datastore['ዘይሕርሻዊ_ንጥፈታት'],
    ]);
    foreach($p16Datastore['data'] as $p16_data){
        DB::table('ad34s')->insertOrIgnore([
            'family_id' => $family_id,
            'ad34002' => $p16_data['ዓይነት_ዘይሕርሻዊ_id'],
            'ad34003' => $p16_data['ኣብ_ውሽጢ_6_ወርሒ'],
            'ad34004' => $p16_data['ኣብ_ውሽጢ_12_ወርሒ'],
            'ad34005' => $p16_data['ዓይነት_ዘይሕርሻዊ_ንጥፈት_id'],
            'ad34006' => $p16_data['ካብ_ዝተዋህበ_ኣገልግሎት_ዝተረኽበ_ጠቕላላ_ኣታዊ_ብናቕፋ'],
            'ad34007' => $p16_data['ግብሪ_ከይተኸፍሎ'],
            'ad34008' => $p16_data['ግብሪ_ዝተኸፍሎ_ጽሩይ_ኣታዊ'],
            'ad34009' => $p16_data['ባጤራ_id'],
    
        ]);
    }
}

//ዘይሕርሻዊ_ንጥፈታት
foreach($p17Datastore as $p17_data){
    DB::table('ad35s')->insertOrIgnore([
        'family_id' => $family_id,
        'ad35002' => $p17_data['ዓይነት_ካልእ_ኣታዊ_id'],
        'ad35003' => $p17_data['ኣብ_ውሽጢ_6_ወርሒ'],
        'ad35004' => $p17_data['ኣብ_ውሽጢ_12_ወርሒ'],
        'ad35005' => $p17_data['ባጤራ_id'],
    ]);
}

//ምት
if($p18Datastore['ሞት']){
    DB::table('ad49s')->insertOrIgnore([
        'family_id' => $family_id,
        'ad49002' => $p18Datastore['ሞት'],
    ]);
    foreach($p18Datastore['data'] as $p18_data){
        DB::table('ad36s')->insertOrIgnore([
            'family_id' => $family_id,
            'ad36002' => $p18_data['ስም_መዋቲ'],
            'ad36003' => $p18_data['ስም_ኣቦ'],
            'ad36004' => $p18_data['ስም_ኣቦሓጎ'],
            'ad36005' => $p18_data['ዝምድና_ምስ_ሓላፊ_ስድራ_id'],
            'ad36006' => $p18_data['ጾታ_id'],
            'ad36007' => $p18_data['ዝሞተሉ_ዕድመ'],
            'ad36008' => $p18_data['ስራሕ'],
            'ad36009' => $p18_data['ምኽንያት_ሞት_id'],
            'ad36010' => $p18_data['ኣብ_ሕርሲ_ወይ_2_ወርሒ_ድሕሪ_ሕርሲ_ድያ_ሞይታ'],
    
        ]);
    }
}

//ፍልሰት
if($p19Datastore['ፍልሰት']){
    DB::table('ad50s')->insertOrIgnore([
        'family_id' => $family_id,
        'ad50002' => $p19Datastore['ፍልሰት'],
    ]);
    foreach($p19Datastore['data'] as $p19_data){
        DB::table('ad37s')->insertOrIgnore([
            'family_id' => $family_id,
            'ad37002' => $p19_data['ስም'],
            'ad37003' => $p19_data['ስም_ኣቦ'],
            'ad37004' => $p19_data['ስም_ኣቦሓጎ'],
            'ad37005' => $p19_data['ዝምድና_ምስ_ሓላፊ_ስድራ_id'],
            'ad37006' => $p19_data['ጾታ_id'],
            'ad37007' => $p19_data['ዝፈለሰሉ_ዕድመ'],
            'ad37008' => $p19_data['ዓመተ_ምህረት_ዝኸደሉ'],
            'ad37009' => $p19_data['ዝነብረሉ_ሃገር_id'],
            'ad37010' => $p19_data['ዝነብረሉ_ከተማ_id'],
            'ad37011' => $p19_data['ኣን'],
            'ad37012' => $p19_data['ተባ'],
    
        ]);
    }
}








            } //end of if one







            // personal info data
            $p2_index = $p2Datastore['index'];
            $persoanl_id = Helper::IDGenerator(new PersonalId, 'personal_id', 9, 'PID');

            DB::table('personal_ids')->insertOrIgnore([
                'personal_id' => $persoanl_id,
                'family_id' => $family_id,
                'f_name_personal' => $p2Datastore['ስም'],
                'm_name_personal' => $p2Datastore['ስም_ኣቦ'],
                'l_name_personal' => $p2Datastore['ስም_ኣቦሓጎ'],
            ]);

            DB::table('ad04s')->insertOrIgnore([
                'personal_id' => $persoanl_id,
                'ad04002' => $p2Datastore['ዝምድና_ምስ_ሓላፊ_ስድራ_id'],
                'ad04003' => $p2Datastore['ጾታ_id'],
                'ad04004' => $p2Datastore['ዜግነት_id'],
                'ad04005' => $p2Datastore['ቁጽሪ_ነባርነት'],
                'ad04006' => $p2Datastore['ቁጽሪ_መንነት'],
                'ad04007' => $p2Datastore['ዕለተ_ልደት'],
                'ad04008' => $p2Datastore['ቦታ_ትውልዲ'],
                'ad04009' => $p2Datastore['ትውልዲ_ሃገር_id'],
                'ad04010' => $p2Datastore['መበቆል_ዓዲ'],
                'ad04011' => $p2Datastore['መበቆል_ሃገር_id'],
            ]);


            //////////////////////////////////////////////////////////////////////!SECTION ssn/////////////////////!SECTION
            $plus = 0;
            $ssn = 0;
            $newid = DB::table('ssns')
                ->select('serial_id')
                ->where('dob', date('y-m-d', strtotime($p2Datastore['ዕለተ_ልደት'])))
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
    
            $data->personal_id = $persoanl_id;
            $data->dob = date('y-m-d', strtotime($p2Datastore['ዕለተ_ልደት']));
            $data->serial_id =  sprintf('%04d', $plus);
    
            $data->save();
    
            $date = date('d-m-y', strtotime($p2Datastore['ዕለተ_ልደት']));;
            $date = str_replace("-", "", $date);
    
            $ssn =  $date . sprintf('%04d', $plus);
            $checksum = Helper::generateChecksum($ssn);
    
            // $wssn = $date . '-' . sprintf('%04d', $plus);
            $wssn = $date . '-' . sprintf('%04d', $plus) . '-' . $checksum;
            
            DB::table('ssn_data')->insertOrIgnore([
                'personal_id' => $persoanl_id,
                'ssn_data' => $date . '-' . sprintf('%04d', $plus) . '-' . $checksum,
            ]);
            //////////////////////////////////////////////////////////////////////////!SECTION end ssn///////////////////////////////////

            foreach ($p3Datastores as $p3Datastore) {
                $p3_index = $p3Datastore['index'];
                if ($p2_index == $p3_index) {
                    DB::table('ad06s')->insertOrIgnore([
                        'personal_id' => $persoanl_id,
                        'ad06002' => $p3Datastore['ኩነታት_መርዓ_id'],
                        'ad06003' => $p3Datastore['ዕድመ_መርዓ'],

                    ]);

                    DB::table('ad07s')->insertOrIgnore([
                        'personal_id' => $persoanl_id,
                        'ad07002' => $p3Datastore['ህላወ_id'],
                        'ad07003' => $p3Datastore['ቦታ_ህላወ_id'],
                        'ad07004' => $p3Datastore['ዞባ_id'],
                        'ad07005' => $p3Datastore['ንኡስ_ዞባ_id'],
                        'ad07006' => $p3Datastore['ሃገራዊ_ኣገልግሎት_id'],
                        'ad07007' => $p3Datastore['ቁጽሪ_ሞባይል'],
                        'ad07008' => $p3Datastore['ቀዋሚ_ተሌፎን'],
                        'ad07009' => $p3Datastore['CDMA'],

                    ]);

                    if ($p3Datastore['ሃገራዊ_ኣገልግሎት_id'] == 2) {
                        DB::table('ad39s')->insertOrIgnore([
                            'personal_id' => $persoanl_id,
                            'ad39002' => $p3Datastore['ዘይፈጸመ_id'],

                        ]);
                    } elseif ($p3Datastore['ሃገራዊ_ኣገልግሎት_id'] == 1) {
                        DB::table('ad40s')->insertOrIgnore([
                            'personal_id' => $persoanl_id,
                            'ad40002' => $p3Datastore['ዝፈጸመ_id'],

                        ]);
                    }


                    foreach ($p3Datastore['ትመልኾም_ቛንቛታት_id'] as $lang) {
                        DB::table('ad38s')->insertOrIgnore([
                            'personal_id' => $persoanl_id,
                            'ad38002' => $lang['id'],
                        ]);
                    }
                }
            }

            foreach ($p5Datastore as $delivery) {
                $p5_index = $delivery['index'];
                if ($p2_index == $p5_index) {
                    DB::table('ad09s')->insertOrIgnore([
                        'personal_id' => $persoanl_id,
                        'ad09002' => $delivery['ብሂወት_ዝተወልደ'],
                    ]);

                    if ($delivery['ብሂወት_ዝተወልደ']) {
                        DB::table('ad10s')->insertOrIgnore([
                            'personal_id' => $persoanl_id,
                            'ad10002' => $delivery['ካብ_ብሂወት_ዝወለድክዮም_ቆልዑ_ኣን'],
                            'ad10003' => $delivery['ካብ_ብሂወት_ዝወለድክዮም_ቆልዑ_ተባ'],
                            'ad10004' => $delivery['ካብ_ዝወለድክዮም_ምሳኺ_ዝነብሩ_ዘለው_ተባ'],
                            'ad10005' => $delivery['ካብ_ዝወለድክዮም_ምሳኺ_ዝነብሩ_ዘለው_ኣን'],
                            'ad10006' => $delivery['ካብ_ብሂወት_ዝተወልዱ_ደሓር_ዝሞቱ_ኣን'],
                            'ad10007' => $delivery['ካብ_ብሂወት_ዝተወልዱ_ደሓር_ዝሞቱ_ተባ'],
                            'ad10008' => $delivery['ካብ_ዝወለድክዮም_ኣብ_ካልእ_ዝነብሩ_ዘለው_ኣን'],
                            'ad10009' => $delivery['ካብ_ዝወለድክዮም_ኣብ_ካልእ_ዝነብሩ_ዘለው_ተባ'],
                            'ad10010' => $delivery['ኣብ_ውሽጢ_12_ኣዋርሕ_ብ_ሂወት_ዝተውልዱ'],
                            'ad10011' => $delivery['ጾታ_ናይ_መወዳእታ_ዝተወልደ_ህጻን_ኣን'],
                            'ad10012' => $delivery['ጾታ_ናይ_መወዳእታ_ዝተወልደ_ህጻን_ተባ'],
                            'ad10013' => $delivery['መወዳእታ_ዝተወልዱ_ህጻናት_ብሂወት_ዘለዉ_ኣን'],
                            'ad10014' => $delivery['መወዳእታ_ዝተወልዱ_ህጻናት_ብሂወት_ዘለዉ_ተባ'],
                        ]);
                    }
                }
            }

            foreach ($p6Datastores as $healthy) {
                $p6_index = $healthy['index'];
                if ($p2_index == $p6_index) {
               
                    DB::table('ad11s')->insertOrIgnore([
                        'personal_id' => $persoanl_id,
                        'ad11002' => $healthy['ኩነታት_ጥዕና'],

                    ]);
                    foreach ($healthy['ተመሓላለፍቲ_ሕማማት'] as $chronic_disease) {
                        DB::table('ad12s')->insertOrIgnore([
                            'personal_id' => $persoanl_id,
                            'ad12002' => $chronic_disease['id'],
                        ]);
                    }
                    foreach ($healthy['ዘይተመሓላለፍቲ_ሕማማት'] as $nonchronic_disease) {
                        DB::table('ad13s')->insertOrIgnore([
                            'personal_id' => $persoanl_id,
                            'ad13002' => $nonchronic_disease['id'],
                        ]);
                    }

                    foreach ($healthy['ዓይነት_ስንክልና'] as $disability) {
                        DB::table('ad14s')->insertOrIgnore([
                            'personal_id' => $persoanl_id,
                            'ad14002' => $disability['id'],
                        ]);
                    }
                    foreach ($healthy['ምኽንያት_ስንክልና'] as $res_disability) {
                        DB::table('ad44s')->insertOrIgnore([
                            'personal_id' => $persoanl_id,
                            'ad44002' => $res_disability['id'],
                        ]);
                    }
                    DB::table('ad15s')->insertOrIgnore([
                        'personal_id' => $persoanl_id,
                        'ad15002' => $healthy['ዓይነት_ደም'],

                    ]);
                }
                

               
                
             
            } // end of foreach $healthy

            foreach ($p7Datastores as $education ){
                $p7_index = $education['index'];
                if ($p2_index == $p7_index) {
                    DB::table('ad16s')->insertOrIgnore([
                        'personal_id' => $persoanl_id,
                        'ad16002' => $education['ዝለዓለ_ደረጃ_ትምህርቲ_id'],
                        'ad16003' => $education['ዝተመረቐሉ_ዕለት'],

                                ]);
            if($education['ዝተጠርየ_ሞያ_ኣሎዶ']){

                foreach ($education['ዝተጠርየ_ሞያ'] as $work_type) {
                    DB::table('ad17s')->insertOrIgnore([
                        'personal_id' => $persoanl_id,
                        'ad17002' => $work_type['ዓይነት_ሞያ_id'],
                        'ad17002' => $work_type['ብከመይ_ኣጥሪኻዮ_id'],
                        'ad17003' => $work_type['ዓመታት_ስራሕ'],
                        'ad17004' => $work_type['ሞያ_መዓርግ_id'],
                    ]);
                }

            }

            if($education['ተሳታፍነት_ኣብ_ስራሕ']){

                
                    DB::table('ad18s')->insertOrIgnore([
                        'personal_id' => $persoanl_id,
                        'ad18002' => $education['ስራሕ']['ኩነታት_ስራሕ_id'],
                        'ad18003' => $education['ስራሕ']['ምንጪ_ኣታዊ_id'],
                       
                    ]);

                    DB::table('ad19s')->insertOrIgnore([
                        'personal_id' => $persoanl_id,
                        'ad19002' => $education['ስራሕ']['ቦታ_ስራሕ_id'],
                        'ad19003' => $education['ስራሕ']['ዓይነት_ስራሕ'],
                        'ad19004' => $education['ስራሕ']['ገምጋም_ወርሓዊ_እቶት_id'],
                       
                    ]);
           

            }

                }
            

            }  // end of foreach education

            foreach($p8Datastores as $p8_data){
                $p8_index = $p8_data['index'];
                if ($p2_index == $p8_index){
                    DB::table('ad20s')->insertOrIgnore([
                        'personal_id' => $persoanl_id,
                        'ad20002' => $p8_data['ኣብ_ውሽጢ_6_ወርሒ_ኣብ_ትኽፈሎ_ወይ_ዘይትኽፈሎ_ስራሕ_ተሳቲፍካዶ_ትፈልጥ_id'],
                        'ad20003' => $p8_data['ኣብ_ውሽጢ_12_ወርሒ_ትኽፈሎ_ወይ_ዘይትኽፈሎ_ስራሕ_ተሳቲፍካዶ_ትፈልጥ_id'],
                        'ad20004' => $p8_data['ኣብ_ውሽጢ_6_ወርሒ_ካብ_ስራሕካ_ብግዝያውነት_ኣብኲርካዶ_ትፈልጥ_id'],
                    ]);
    
                    DB::table('ad21s')->insertOrIgnore([
                        'personal_id' => $persoanl_id,
                        'ad21002' => $p8_data['ሓላፍነታዊ_ስራሕ_ወይ_ዕዮ_ኣብ_ቀንዲ_ስራሕካ_እንታዩ'],
                        'ad21003' => $p8_data['እንታይ_ዓይነት_እዩ_ቀንዲ_ስራሕካ'],
                        'ad21004' => $p8_data['ደረጃ_ስራሕካ_id'],
                    ]);
    
                    DB::table('ad22s')->insertOrIgnore([
                        'personal_id' => $persoanl_id,
                        'ad22002' => $p8_data['ደሞዝ'],
                        'ad22003' => $p8_data['ኮምሽን_ኣበል_ተወሳኺ_ደሞዝ'],
                        'ad22004' => $p8_data['ትርፊ_ግዜ'],
                        'ad22005' => $p8_data['ሞቑሽሽ_ብገንዘብ'],
                        'ad22006' => $p8_data['ካልእ_ኣታዊ_ብገንዘብ'],
                    ]);

                    DB::table('ad23s')->insertOrIgnore([
                        'personal_id' => $persoanl_id,
                        'ad23002' => $p8_data['ብጎደሎ_ዋጋ_ዝገዛእካዮ'],
                        'ad23003' => $p8_data['መግቢ_ከም_ደሞዝካ'],
                        'ad23004' => $p8_data['ካብ_ናጻ_ገዛ_ክራይ_ትረኽቦ'],
                        'ad23005' => $p8_data['ክዳውንቲ_ከም_ሓገዝ_ዝረኸብካዮ'],
                        'ad23006' => $p8_data['ካልእ_ትረኽቦ_ሓገዝ'],
                    ]);


                }             

            }//end of foreach p8

            //ቀዋምን_ዘይቀዋምን ንብረት

        } // end of foreach one

      return "data";
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
