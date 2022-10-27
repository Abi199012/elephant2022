<?php

namespace Database\Seeders;
use Illuminate\Database\Eloquent\Factories\Sequence;
use App\Models\Ref_21;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Ref21Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Housing_Unit_Water_Source_Ref_Table
        Ref_21::factory(11)->state(new sequence(
            ['ref_21002' => "ቡንባ ኣብ ውሽጢ ገዛ"],
            ['ref_21002' => "ቡንባ ኣብ ውሽጢ ካንቸሎ ናይ ብሕቲ"],
            ['ref_21002' => "ቡንባ ኣብ ውሽጢ ካንቸሎ ናይ ሓባር"],
            ['ref_21002' => "ቡንባ ካብ ካንቸሎ ወጻኢ"],
            ['ref_21002' => "ቦጥ"],
            ['ref_21002' => "ዝተዓቀበ ዔላ/ፈልፋሊ/ድሪል"],
            ['ref_21002' => "ዘይተዓቀበ ዔላ/ፈልፋሊ"],
            ['ref_21002' => "ሩባ ፡ ቀላይ ፡ ዕቋር ማይ"],
            ['ref_21002' => "ዝተኸድነ ባስካ"],
            ['ref_21002' => "ዘይተኸድነ ባስካ"],
            ['ref_21002' => "ካልእ"]
        ))->create();
    }
}
