<?php

namespace Database\Seeders;

use Illuminate\Database\Eloquent\Factories\Sequence;
use App\Models\Re11;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Re11Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    { 

        //ብሄራት
        Re11::factory(10)->state(new sequence(
            ['re11002' => "ትግርኛ"],
            ['re11002' => "ትግረ"],
            ['re11002' => "ሳሆ"],
            ['re11002' => "ብሌን"],
            ['re11002' => "ዓፋር"],
            ['re11002' => "ኩናማ"],
            ['re11002' => "ናራ"],
            ['re11002' => "ሕዳርብ"],
            ['re11002' => "ራሻይዳ"],
            ['re11002' => "ካብ ኤርትራ ወጻኢ ዝኾነ ብሄር"],
        ))->create();
    }
}
