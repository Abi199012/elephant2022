<?php

namespace Database\Seeders;
use App\Models\Ref_31;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Ref31Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
           // ዓይነት ስንክልና
           Ref_31::factory(21)->state(new sequence(
            ['ref_31002' => "ዑረት ክልቲኡ ኣዒንቲ"],
            ['ref_31002' => "ዑረት ሓንቲ ዓይኒ"],
            ['ref_31002' => "ፍጹም ጽመት"],
            ['ref_31002' => "ከፊል ጽመት ሓደ እዝኒ ወይ ክልቲኡ"],
            ['ref_31002' => "ለኻት ወይ ክዛረብ ዝይኽእል"],
            ['ref_31002' => "ሓደ እግሪ ወይ ክልቲኡ ዝተቖርጸ"],
            ['ref_31002' => "ሓደ እግሪ ወይ ክልቲኡ ዝለመሰ"],
            ['ref_31002' => "እግረ ሓጺር"],
            ['ref_31002' => "እግሪ ቅርጸ-ዝምቡልነት"],
            ['ref_31002' => "ድምባወ"],
            ['ref_31002' => "ካልእ ምስ ምንቅስቃስ ዝተተሓሓዘ ቀይድታት"],
            ['ref_31002' => "ሓደ ኢድ ወይ ክልቲኡ ዝተቖረጸ"],
            ['ref_31002' => "ሓደ ኢድ ወይ ክልቲኡ ዝለመሰ"],
            ['ref_31002' => "ናይ ኢድ ቅርጺ ዝምቡልነት/ለምሲ ናይ ዝኾነይኹን ዓይነት"],
            ['ref_31002' => "ካልእ ናይ ኢድ ቀይድታት"],
            ['ref_31002' => "ስንኩል ናይ ኣእምሮ"],
            ['ref_31002' => "ናይ ኣእምሮ ግቱእ፡ዕጉት፡ጉቱት"],
            ['ref_31002' => "ሕማም ምንፍርፋር"],
            ['ref_31002' => "ካልእ ናይ ኣእምሮ ቀይድታት"],
            ['ref_31002' => "ደዌ"],
            ['ref_31002' => "ብዙሓዊ ስንክልናታት"],
            ['ref_31002' => "ካልእ ዓይነት ስንክልና"],
        
        ))->create();
    }
}
