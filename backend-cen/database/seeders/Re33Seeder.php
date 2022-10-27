<?php

namespace Database\Seeders;
use Illuminate\Database\Eloquent\Factories\Sequence;
use App\Models\Re33;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Re33Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         // ትምህርቲ ደረጃታት
         Re33::factory(21)->state(new sequence(
            ['re33002' => "መውዓሊ ህጻናት ይመሃር ኣሎ"],
            ['re33002' => "1ይ ክፍሊ ወዲኡ"],
            ['re33002' => "2ይ ክፍሊ ወዲኡ"],
            ['re33002' => "3ይ ክፍሊ ወዲኡ"],
            ['re33002' => "4ይ ክፍሊ ወዲኡ"],
            ['re33002' => "5ይ ክፍሊ ወዲኡ"],
            ['re33002' => "6ይ ክፍሊ ወዲኡ"],
            ['re33002' => "7ይ ክፍሊ ወዲኡ"],
            ['re33002' => "8ይ ክፍሊ ወዲኡ"],
            ['re33002' => "9ይ ክፍሊ ወዲኡ"],
            ['re33002' => "10ይ ክፍሊ ወዲኡ"],
            ['re33002' => "11ይ ክፍሊ ወዲኡ"],
            ['re33002' => "12ይ ክፍሊ ወዲኡ"],
            ['re33002' => "12+1 ወዲኡ"],
            ['re33002' => "12+2 ወዲኡ"],
            ['re33002' => "12+3 ወዲኡ"],
            ['re33002' => "12+4 ወዲኡ"],
            ['re33002' => "12+5 ወዲኡ"],
            ['re33002' => "ማስትረይት ዲግሪ ወዲኡ"],
            ['re33002' => "ዶክትረይት ዲግሪ ወዲኡ"],
            ['re33002' => "ፒኤችዲ ዲግሪ ወዲኡ"],
        ))->create();
    }
}
