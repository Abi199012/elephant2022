<?php

namespace Database\Seeders;

use Illuminate\Database\Eloquent\Factories\Sequence;
use App\Models\Re24;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Re24Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
          //Housing_Unit_Water_Source_Ref_Table
          Re24::factory(2)->state(new sequence(
            ['re24002' => "ቡንባ ኣብ ውሽጢ ገዛ"],
            ['re24002' => "ቡንባ ኣብ ውሽጢ ካንቸሎ ናይ ብሕቲ"],
            ['re24002' => "ቡንባ ኣብ ውሽጢ ካንቸሎ ናይ ሓባር"],
            ['re24002' => "ቡንባ ካብ ካንቸሎ ወጻኢ"],
            ['re24002' => "ቦጥ"],
            ['re24002' => "ዝተዓቀበ ዔላ/ፈልፋሊ/ድሪል"],
            ['re24002' => "ዘይተዓቀበ ዔላ/ፈልፋሊ"],
            ['re24002' => "ሩባ ፡ ቀላይ ፡ ዕቋር ማይ"],
            ['re24002' => "ዝተኸድነ ባስካ"],
            ['re24002' => "ዘይተኸድነ ባስካ"],
            ['re24002' => "ካልእ"]
        ))->create();
    }
}
