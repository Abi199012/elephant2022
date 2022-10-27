<?php

namespace Database\Seeders;
use App\Models\Ref_10;
use Illuminate\Database\Eloquent\Factories\Sequence;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Ref10Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
          //ብሄራት
          Ref_10::factory(10)->state(new sequence(
            ['ref_10002' => "ትግርኛ"],
            ['ref_10002' => "ትግረ"],
            ['ref_10002' => "ሳሆ"],
            ['ref_10002' => "ብሌን"],
            ['ref_10002' => "ዓፋር"],
            ['ref_10002' => "ኩናማ"],
            ['ref_10002' => "ናራ"],
            ['ref_10002' => "ሕዳርብ"],
            ['ref_10002' => "ራሻይዳ"],
            ['ref_10002' => "ካብ ኤርትራ ወጻኢ ዝኾነ ብሄር"],
        ))->create();
    }
}
