<?php

namespace Database\Seeders;
use Illuminate\Database\Eloquent\Factories\Sequence;
use App\Models\Ref_34;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Ref34Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         // ዝለዓለ ደረጃ ትምህርቲ
         Ref_34::factory(21)->state(new sequence(

            ['ref_34002' => "መውዓሊ ህጻናት ይመሃር ኣሎ"],
            ['ref_34002' => "1ይ ክፍሊ ወዲኡ"],
            ['ref_34002' => "2ይ ክፍሊ ወዲኡ"],
            ['ref_34002' => "3ይ ክፍሊ ወዲኡ"],
            ['ref_34002' => "4ይ ክፍሊ ወዲኡ"],
            ['ref_34002' => "5ይ ክፍሊ ወዲኡ"],
            ['ref_34002' => "6ይ ክፍሊ ወዲኡ"],
            ['ref_34002' => "7ይ ክፍሊ ወዲኡ"],
            ['ref_34002' => "8ይ ክፍሊ ወዲኡ"],
            ['ref_34002' => "9ይ ክፍሊ ወዲኡ"],
            ['ref_34002' => "10ይ ክፍሊ ወዲኡ"],
            ['ref_34002' => "11ይ ክፍሊ ወዲኡ"],
            ['ref_34002' => "12ይ ክፍሊ ወዲኡ"],
            ['ref_34002' => "12+1 ወዲኡ"],
            ['ref_34002' => "12+2 ወዲኡ"],
            ['ref_34002' => "12+3 ወዲኡ"],
            ['ref_34002' => "12+4 ወዲኡ"],
            ['ref_34002' => "12+5 ወዲኡ"],
            ['ref_34002' => "ማስትረይት ዲግሪ ወዲኡ"],
            ['ref_34002' => "ዶክትረይት ዲግሪ ወዲኡ"],
            ['ref_34002' => "ፒኤችዲ ዲግሪ ወዲኡ"],
        ))->create();
    }
}
