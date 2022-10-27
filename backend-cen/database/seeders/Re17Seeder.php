<?php

namespace Database\Seeders;

use Illuminate\Database\Eloquent\Factories\Sequence;
use App\Models\Re17;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Re17Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Disability_Table
           Re17::factory()->state(new sequence(
            ['re17002' => "ዑረት ክልቲኡ ኣዒንቲ"],
            ['re17002' => "ዑረት ሓንቲ ዓይኒ"],
            ['re17002' => "ፍጹም ጽመት"],
            ['re17002' => "ከፊል ጽመት ሓደ እዝኒ ወይ ክልቲኡ"],
            ['re17002' => "ለኻት ወይ ክዛረብ ዝይኽእል"],
            ['re17002' => "ሓደ እግሪ ወይ ክልቲኡ ዝተቖርጸ"],
            ['re17002' => "ሓደ እግሪ ወይ ክልቲኡ ዝለመሰ"],
            ['re17002' => "እግረ ሓጺር"],
            ['re17002' => "እግሪ ቅርጸ-ዝምቡልነት"],
            ['re17002' => "ድምባወ"],
            ['re17002' => "ካልእ ምስ ምንቅስቃስ ዝተተሓሓዘ ቀይድታት"],
            ['re17002' => "ሓደ ኢድ ወይ ክልቲኡ ዝተቖረጸ"],
            ['re17002' => "ሓደ ኢድ ወይ ክልቲኡ ዝለመሰ"],
            ['re17002' => "ናይ ኢድ ቅርጺ ዝምቡልነት/ለምሲ ናይ ዝኾነይኹን ዓይነት"],
            ['re17002' => "ካልእ ናይ ኢድ ቀይድታት"],
            ['re17002' => "ስንኩል ናይ ኣእምሮ"],
            ['re17002' => "ናይ ኣእምሮ ግቱእ፡ዕጉት፡ጉቱት"],
            ['re17002' => "ሕማም ምንፍርፋር"],
            ['re17002' => "ካልእ ናይ ኣእምሮ ቀይድታት"],
            ['re17002' => "ደዌ"],
            ['re17002' => "ብዙሓዊ ስንክልናታት"],
            ['re17002' => "ካልእ ዓይነት ስንክልና"]
        ))->create();
    }
}
